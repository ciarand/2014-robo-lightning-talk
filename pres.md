# hello

---

# this is a lightning talk

---

# what is a task runner?

---

Examples
--------
- Make (GNU, BSD, etc.)
- Phing
- Apache Ant
- Symfony / Artisan
- Shell scripts

---

Arguments against some of these
-------------------------------

- XML is not a programming language
- One-class-per-task is often overkill
- Shell scripts don't understand PHP

---

# robo

---

# Robo is a task runner for PHP

---

<!-- forgive me for this -->
<iframe src="http://robo.li/" style="width: 100%; height: 1000px;">
    Loading the Robo.li site…
</iframe>

---

An example
==========

---

```php
/**
 * @desc runs a web server
 */
public function serve()
{
    $this->taskServer(8000)->dir(__DIR__)->run();
}
```

---

```php
/**
 * @desc runs a server and regens on changes
 */
public function watch()
{
    $this->taskServer(8000)
        ->dir(__DIR__)
        ->background()
        ->run();

    $this->taskWatch()->monitor(
        ["pres.md", "template.php"],
        function() {
            $this->gen();
        }
    )->run();
}
```

---

Other cool things it can do
---------------------------

- phpunit
- parallel tasks
- git commands
- generate api docs in markdown
- parallel commands (phpunit in parallel)
- watch files and folders
- composer, bower
- run symfony / artisan commands
- ssh commands
- nice DSL over the builtin `proc_*` funcs

---

Questions?
==========

---

Who am I?
---------
- Code github.com/@ciarand on GitHub
- Tweet @ciarandowney
- Blog ciarand.me

---

Want to see the full RoboFile used in this presentation?
========================================================

---

github.com/ciarand/2014-robo-lightning-talk
===========================================

