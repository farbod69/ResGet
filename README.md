ResGet
======

Small Laravel 4 artisan command that downloads famous JavaScripts and StyleSheets to your project

*Resget now can minify your scripts and stylesheets for you.

Installation
============
Simply download resget-install.sh and copy it to your laravel project root directory.
Now run it with php as following format, it will download all needed files and set laravel settings for you.

<code> php resget-install.sh </code>

Usage
============
<ol>
  <li>adding resource
    <p>after resget command add your desired resources with --resname or -r currently resget supports following resources
      <ul>
        <li>Jquery Library -r=jqury or -r=$</li>
        <li>UnderscoreJS Library -r=underscore or -r=_</li>
        <li>BackBoneJS Library -r=backbone or -r=bb <p>*Using BackBone will automatically add jquery and underscore to your library</p></li>
        <li>AngularJS Library -r=angular or -r=ang</li>
        <li>Twitter Bootstrap 3 -r=bootstrap3 or -r=tb3<p>*This will add both bootstrap's stylesheet and script</p></li>
        <li>Font Awesome Library -r=fontawesome or -r=fa</li>
      </ul>
      *I am currently working on creating a repo for scripts and stylesheets so after that you can save and share your favorite stylesheet or script on the repo and everyone can get it with ResGet. Stay tuned :D
      ResGet will automatically creates /js , /font , /img and /css for you under your public directory and save resources there for those users who perfer custom public directory beside laravel public directory
      they can choose directory by --approot=<your public directory> or -a=<your public directory> the preset is laravel public directory.
      <br/>
      following line is a sample code downloading many resources in a custom directory
      <br/>
      <code><strong>php artisan resget -r=backbone -r=tb3 -r=fa -a=php<strong></code>
    </p>
  </li>
  <li>Merging and minifying your scripts
    <p>
    You can merge and minify your java scripts with ResGet. ResGet utilize a small php tool written by Ryan Grove names jsmin-php. ResGet Installer automatically downloads it and 
    saves it under <code>app/storage/vendor/jsmin.php</code> , it will creates vendor folder for you if it does not exist.
    <br/>
    To minify your code you have tell resget that you want to minify by using minify command after resget. you have to give it a name with --name=<your js name> and give the path to your script files with --path or -p switches you can also use --approot or -a for
    a custom public directory it will create the minified version for you under the /js folder in your selected public directory. here is a sample of its usage:
    <br/>
    <code><strong>php artisan resget minify -p=/home/1.js -p=/home/2.js --name=myjs -a=php</strong><code>
    </p>
  </li>
</ol>
<p>
  Here is the complete command list of ResGet:
  <table>
    <tr>
      <td>
        command / switch
      </td>
      <td>
        Description
      </td>
      <td>
        How to use
      </td>
    </tr>
    <tr>
      <td>
        info
      </td>
      <td>
        Shows developer information
      </td>
      <td>
        <code>php artisan resget info</code>
      </td>
    </tr>
    <tr>
      <td>
        version
      </td>
      <td>
        show your ResGet version
      </td>
      <td>
        <code>php artisan resget version</code>
      </td>
    </tr>
    <tr>
      <td>
        minify
      </td>
      <td>
        Tells ResGet you want to minify scripts
      </td>
      <td>
        <code>php artisan resget minify --name={name} -p={path/to/script} -p={path/to/script} ... [-p={path/to/custom/public/folder}]</code>
      </td>
    </tr>
    <tr>
      <td>
        --resname | -r
      </td>
      <td>
        you can choose libraries by setting thier names with this command you can choose [jqurey | $ | underscode | _ | backbone | bb 
        <br/>
        angular | ang | bootstrap3 | bt3 | fontawesome | fa ]
      </td>
      <td>
        <code>php artisan resget -r=ang -r=_ -r=$ ....</code>
      </td>
    </tr>
    <tr>
      <td>
        --approot | -a [default = public]
      </td>
      <td>
        you can choose a custom public folder
      </td>
      <td>
        <code>php artisan resget -r=$ -r=_ ... -a={custom/public/folder}<code>
        <br/>
        <code>php artisan resget minify -n={myjs} -p={path/to/js} -p={path/to/js} ... -a={custom/public/folder}</code>
      </td>
    </tr>
    <tr>
      <td>
        get [currently not available]
      </td>
      <td>
        it will get a custom js from my repo uploaded and shared by others. I am still working on it.
      </td>
      <td>
        N/A
      </td>
    </tr>
  </table>
</p>

License
=======
This Tool is under MIT license feel free to use it, share it and develope it :D 

  
