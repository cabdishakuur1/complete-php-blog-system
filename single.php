<!doctype html>
<html>
    <head>
        <title>BoggaHore</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="naqshad.css" rel="stylesheet" type="text/css" />
    </head>
    
    <body>
    
     
    <header class="header clearfix">

        <img class="logo" src="images/logo.png" alt="">
        <nav class="navbar" id="nav">
            <span class="gear right" onclick=showMenu();>&#9776;</span>
            <a href="index.php">Home</a>
            
                            <a href="category.php">Technology</a>
                            <a href="category.php">Programming</a>
                            <a href="category.php">Security</a>
                            <a href="category.php">Tutorials</a>
                    </nav>
    </header>

         
                <main class="main">
            <section class="section">
                        <article class="article single clearfix">
                <a href="single.php">
                    <img  src="images/image2.jpg" class="post-image" />
                </a>
                <div class="content">
               
                    <h2>Microsoft Office 365 Is Now Available On Apple’s Mac Store</h2>
                    <p>Last year at WWDC Apple promised to launch Microsoft Office 365. Apple has finally announced on Thursday that Microsoft Office 365 is now available on Mac App Store. Users can now directly download the signature Microsoft apps such as Outlook, Word, PowerPoint, OneNote, and Excel on their MacOS computers.</p>
                
                    <hr>
                    <h4>Posted on 2019-11-01 16:05:41| TECHNOLOGY</h4>
              
                </div>
            </article>
            
                            
                
                
        </section>
            
        <aside class="aside">
            <div class="inner">
            <h2>Recent Posts</h2>
                                <a href="single.php">Microsoft Office 365 Is Now Available On Apple’s Mac Store&nbsp;<b style="color:red">More..</b>  </a>
                                    <a href="single.php">Poisonous Gas Sensor On IPhone And Apple Watch&nbsp;<b style="color:red">More..</b>  </a>
                                    <a href="single.php">5 Best Artificial Intelligence Books&nbsp;<b style="color:red">More..</b>  </a>
                                    <a href="single.php">Best IOS System Repaire Tool To Get You Out Of All Kinds Of IPhone &nbsp;<b style="color:red">More..</b>  </a>
                
            </div>
            
            
            <div class="inner">
            
                <h2>Categories</h2>
                                            <a href="category.php">TECHNOLOGY</a>
                                             <a href="category.php">PROGRAMMING</a>
                                             <a href="category.php">SECURITY</a>
                                             <a href="category.php">TUTORIALS</a>
                    
            </div>
            </div>
        </aside>        
        </main>
      
        <footer class="footer">
            <h2>&copy;copyright Somcoders Designed by Abdifatah Abdilahi</h2>
        </footer>
    
    </body>
        <script>
            function showMenu(){
               var nav = document.getElementById("nav");
                if(nav.className === "navbar" ){
                    nav.className += " responsive";
                }else{
                    nav.className = "navbar";
                }
            }
        </script>
</html>