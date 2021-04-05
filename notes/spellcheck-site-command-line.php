<?php
// Date
$postDate        = "22 Feb 2021";


// Define SEO variables
$pageTitle       = "Spell check your website from the command line" . $titleSuffix;
$pageDescr       = "What are the main difference between robots.txt and meta robots? ";

// Post variables
$postTitle       = "Spell checking your website from the command line";
$postSubTitle    = "How to use the command line to check your site for egregious spelling";


// Include
include "../header-single.php";
?>   
   
<main>
    <!-- Introduction -->
    <article class="section">
        <div class="row">
            <div class="row--inner-limited">

                <p class="paragraph">If you work in digital marketing and SEO then you will have most certainly have found yourself working in a WYSIWYG editor at some point, switching between a preview and a backend draft of a blog or a webpage repeatedly trying to perfect your work before you publish it. Often you can publish away without performing a rudimentary and necesary task – spellchecking.</p>

                <p class="paragraph">A lot of spellchecking solution for websites are onerous. Grammarly, while it does the job for copy, doesn’t give you granular control over things like <code class="code-inline">&lt;alt&gt;</code> or <code class="code-inline">&lt;meta&gt;</code> tags, where correct grammar and spelling is necessary. It’s also another browser extension that you don’t really need. Of course, for CMSs like Wordpress, there are even more onerous solutions like plugins, which are overkill.</p>

                <p class="paragraph">So what’s a lean, simple way to check your webpages for embarrassing spelling mistakes?</p>

                <h2 class="heading heading--secondary">Using wget and aspell from the command line</h2>

                <p class="paragraph">I find the quickest and simplest way is to create a local copy of your webpage and run it through a command line spellchecker. The whole process will take you less than a minute:</p>

                <h2 class="heading heading--secondary">wget</h2>

                <p class="paragraph">Wget is a free utility for downloading web content locally. It’s part of the GNU Project, but you can also grab it on Windows and MaxOS. It supports downloading viab HTTP, HTTPS and FTP, so all bases are covered.</p>

                <p class="paragraph">We’re going to use it to perform a basic task of grabbing one of our web pages that we want to spell check.</p>

                <p class="paragraph">First, download Wget. I’m using an Arch Linux install, but for everything else you can find the source code here.</p>

                <pre class="code-highlight"><code class="terminal"><span class="us">$</span> sudo pacman -S wget</code></pre>

                <p class="paragraph">Confirm you're good to go.</p>

                <pre class="code-highlight"><code class="terminal"><span class="us">$</span> wget -V</code></pre>
            
                <p class="paragraph">Awesome. Let’s grab the webpage we’re checking. Wget takes two arguments, the first being <code class="code-inline">[OPTION]</code> and the second being the <code class="code-inline">[URL]</code> in question.</p>

                <p class="paragraph">We don’t need an option to grab the page so CD into your directory and run.</p>
                <pre class="code-highlight"><code class="terminal"><span class="us">$</span> wget https://example.com/file.html</code></pre>
                <p class="paragraph">The webpage is now downloaded locally. Wget automatically saves the file as index.html, but if you are keeping multiple files in your directory you can name them accordingly in the <code class="code-inline">[OPTION]</code> argument.</p>
                <p class="paragraph">To do that, just use the -O command:</p>
                <pre class="code-highlight"><code class="terminal"><span class="us">$</span> wget -O chosen-file-name.html https://example.com/file.html</code></pre>
                <p class="paragraph">Done. Now onto spell checking.</p>
                <h2 class="heading heading--secondary">aspell</h2>
                <p class="paragraph">Aspell is an open source spell checker that can be used on files, or you can pipe it into words straight from the command line.</p>
                <p class="paragraph">For our purposes, the beauty of aspell is that it has an HTML filter and ignores tags such as <code class="code-inline">&lt;script&gt;</code>, or any tags that you want to specify</p>
                <p class="paragraph">In order to install aspell, you need to install the program itself, and then the dictionary you want to use.</p>
                <pre class="code-highlight"><code class="terminal"><span class="us">$</span> sudo -S pacman aspell</code></pre>
                <p class="paragraph">For our purposes we will be installing the English dictionary.</p>
                <pre class="code-highlight"><code class="terminal"><span class="us">$</span> sudo -S pacman aspell-en</code></pre>
                <p class="paragraph">Now all we need to do is run the spellchecker against our file using the HTML (-H) filter:</p>
                <pre class="code-highlight"><code class="terminal"><span class="us">$</span> aspell -H check chosen-file-name.html</code></pre>
                <p class="paragraph">Aspell will then take you through its spelling error prompts and will edit the file appropriately. If you just want to list out the spelling errors on the page from the terminal, then you can do that as well:</p>
                <pre class="code-highlight"><code class="terminal"><span class="us">$</span> cat chosen-file-name.html | aspell list -H </code></pre>
                <p class="paragraph">That's it. A simple way to check your pages for spelling errors that doesn't involve having to look at different WYSIWYG editor fields. It's especially useful for those of us in SEO who want to check our documents for onpage spelling errors. </p>
            </div>
        </div>
    </article>
    <!-- / end introduction -->        
</main>

<?php
include "../footer.php";
?>


 