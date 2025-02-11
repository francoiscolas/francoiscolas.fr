import Typewriter from "typewriter-effect/dist/core";

(function () {
    (new Typewriter("#code"))
      .typeString("<strong>$</strong> ")
      .pauseFor(1000)
      .typeString("gcc -x c - &lt;&ltEOF<br/>")
      .typeString("#include \"unistd.h\"<br/>")
      .typeString("<br/>")
      .typeString("int main()<br/>")
      .typeString("{<br/>")
      .typeString("&nbsp;&nbsp;&nbsp;&nbsp;write(1, \"Hi!\\n\", 4);<br/>")
      .typeString("&nbsp;&nbsp;&nbsp;&nbsp;return 0;<br/>")
      .typeString("}<br/>")
      .typeString("EOF<br/>")
      .pauseFor(1000)
      .typeString("<strong>$</strong> ")
      .pauseFor(1000)
      .typeString("./a.out<br/>")
      .typeString("Hi!<br/>")
      .typeString("<strong>$</strong> ")
      .start();
})();
