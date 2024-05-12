"use strict";

const Keys = {
  Tab: 9,
  Enter: 13,
  Esc: 27,
  Up: 38,
  Down: 40
};

class DropdownMenu {
  constructor(elm) {
    this.elm = elm;
    this.selectBox = null;
    this.dropdown = null;
    this.input = null;
    this.options = null;
    this.option = null;
    this.caret = null;
    this.data = null;
    this.optionCount = null;
    this.inputTime = null;
    this.closeOnSelect = null;
    this.placeholder = null;
    this.errorCallback = null;
    this.shown = false;
    this.onprocess = false;
    this.inputTimeout = null;
    this.active = null;
    this.optionsHeight = 0;
  }
  createDropdownData() {
    this.selectBox = document.querySelector(this.elm);
    let options = this.selectBox.querySelectorAll("option");
    let data = [];

    for (let i = 0; i < options.length; i++) {
      let option = options[i];

      data.push({
        id: option.getAttribute("data-id"),
        text: option.innerText
      });
    }

    return data;
  }
  getOption(options, item, defaultValue) {
    if (typeof options === "undefined") {
      return defaultValue;
    }

    if (typeof options[item] === "undefined") {
      return defaultValue;
    }

    return options[item];
  }

  init(options) {
    this.data = this.createDropdownData();
    this.optionCount = this.getOption(options, "optionCount", 10);
    this.inputTime = this.getOption(options, "inputTime", 500);
    this.closeOnSelect = this.getOption(options, "closeOnSelect", true);
    this.placeholder = this.getOption(options, "placeholder", null);
    this.errorCallback = this.getOption(options, "errorCallback", null);

    this.createElms(() => {
      this.createEvents();
    });
  }

  createElms(callback) {
    this.dropdown = document.createElement("DIV");
    this.dropdown.classList.add("dropdown-menu");
    this.input = document.createElement("INPUT");
    this.input.setAttribute("type", "text");
    this.input.classList.add("dropdown-menu-text");

    if (this.placeholder !== null) {
      this.input.setAttribute("placeholder", this.data[this.placeholder].text);
    }

    this.options = document.createElement("DIV");
    this.options.classList.add("dropdown-menu-options");
    this.options.setAttribute("tabindex", -1);

    this.caret = document.createElement("A");
    this.caret.classList.add("dropdown-menu-switch");
    this.caret.setAttribute("tabindex", -1);

    this.dropdown.appendChild(this.input);
    this.dropdown.appendChild(this.options);
    this.dropdown.appendChild(this.caret);

    this.selectBox.insertAdjacentElement("afterend", this.dropdown);

    this.selectBox.style.display = "none";
    this.selectBox.setAttribute("hidden", true);

    callback();
  }

  showOptions(value, j) {
    let self = this;

    return new Promise(resolve => {
      let showCount = 0;

      for (let i = 0; i < self.data.length; i++) {
        let data = self.data[i];
        let text = data.text;
        let input = value;

        if (text.indexOf(input) >= 0) {
          let option = document.createElement("A");
          option.classList.add("dropdown-menu-option");

          option.setAttribute("data-dropdown-menu-value", data.id);
          option.setAttribute("data-dropdown-menu-text", data.text);
          option.innerText = data.text;

          self.options.appendChild(option);

          option.addEventListener("click", function(evt) {
            evt.preventDefault();
            self.optionSelectActive(this);
          });

          if (j < self.optionCount) {
            self.optionsHeight += option.offsetHeight;
            j++;
          }

          showCount++;
        }
      }

      let optionClass = " + .dropdown-menu .dropdown-menu-options .dropdown-menu-option";
      self.option = document.querySelectorAll(self.elm + optionClass);
      self.options.style.height = self.optionsHeight + "px";

      if (self.active !== null) {
        self.options.scrollTop = self.optionScroll(self.active);
      }
    }, 0);
  }

  hideOptions() {
    this.options.style.height = "0px";
  }
  async toggleOptions(value, j = 0) {
    if (this.shown === false) {
      await this.showOptions(value, j);
    } else {
      this.hideOptions();
    }
  }

  optionScroll(elm) {
    let scroll = 0;

    try {
      if (this.options.scrollTop + this.options.offsetHeight <= elm.offsetTop) {
        scroll = elm.offsetTop - this.options.offsetHeight + elm.offsetHeight;
      } else if (this.options.scrollTop > elm.offsetTop) {
        scroll = elm.offsetTop;
      } else {
        scroll = this.options.scrollTop;
      }
    } catch (e) {
      if (this.errorCallback !== null) {
        this.errorCallback("Result not found");
      }
    }

    return scroll;
  }
  optionSelection(y) {
    let focusElm = null;
    let setScroll = 0;

    if (this.active !== null) {
      this.active.classList.remove("dropdown-menu-option-active");
    }

    if (y === true) {
      if (this.active === null || this.active.nextElementSibling === null) {
        this.active = this.option[0];
      } else {
        this.active = this.active.nextElementSibling;
      }
    } else {
      if (this.active === null || this.active.previousElementSibling === null) {
        this.active = this.option[this.option.length - 1];
      } else {
        this.active = this.active.previousElementSibling;
      }
    }

    setScroll = this.optionScroll(this.active);

    this.active.classList.add("dropdown-menu-option-active");

    this.options.scrollTop = setScroll;
  }
  optionSelectActive(option) {
    if (option !== null) {
      option.classList.add("dropdown-menu-option-active");
      this.active = option;
    }

    if (typeof this.active === "undefined" || this.active === null) {
      if (this.errorCallback !== null) {
        this.errorCallback("Value not found");
      }

      return;
    }

    let value = this.active.getAttribute("data-dropdown-menu-value");
    let text = this.active.getAttribute("data-dropdown-menu-text");

    this.selectBox.value = value;
    this.input.value = text;

    if (this.closeOnSelect === true) {
      this.hideOptions();
    }
  }
  createEvents() {
    let self = this;

    ["click", "scroll", "blur"].forEach(evt => {
      window.addEventListener(evt, () => {
        self.hideOptions();
      });
    });

    self.dropdown.addEventListener("click", evt => {
      evt.stopPropagation();
    });

    self.input.addEventListener("input", evt => {
      if (self.data.length !== null) {
        if (self.inputTimeout !== null) {
          clearTimeout(self.inputTimeout);
        }

        self.inputTimeout = setTimeout(() => {
          self.shown = false;
          self.onprocess = false;
          self.optionsHeight = 0;
          self.active = null;
          self.options.innerHTML = "";
          self.selectBox.value = "";

          self.toggleOptions(self.input.value);
        }, self.inputTime);
      }
    });

    self.input.addEventListener("keydown", function(evt) {
      if (self.shown === true) {
        if (evt.keyCode === Keys.Tab || evt.keyCode === Keys.Enter) {
          evt.preventDefault();

          self.optionSelectActive(null);
        } else if (evt.keyCode === Keys.Esc) {
          self.hideOptions();
        } else if (evt.keyCode === Keys.Up) {
          self.optionSelection(false);
        } else if (evt.keyCode === Keys.Down) {
          self.optionSelection(true);
        }
      } else if (
        self.onprocess === false &&
        (evt.keyCode === Keys.Up || evt.keyCode === Keys.Down)
      ) {
        self.onprocess = true;

        self.toggleOptions(self.input.value);
      }
    });

    self.caret.addEventListener("click", () => {
      if (self.data.length !== null && self.onprocess === false) {
        self.onprocess = true;

        self.toggleOptions("");
        self.input.focus();
        self.input.select();
      }
    });

    self.options.addEventListener("transitionend", evt => {
      if (evt.propertyName === "height") {
        if (self.shown === false) {
          self.shown = true;
          self.onprocess = false;
        } else {
          self.shown = false;
          self.onprocess = false;
          self.options.innerHTML = "";
          self.optionsHeight = 0;
        }
      }
    });
  }
}

var combo = new DropdownMenu("#dropdown1");

combo.init({
  optionCount: 5,
  inputTime: 500,
  closeOnSelect: true,
  placeholder: 0,
  errorCallback: function(message) {
    console.log(message);
  }
});