<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="X-UA-Compatible" content="chrome=1" />
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <title>SGIS Blades</title>
        <link rel="stylesheet" type="text/css" href="../Grunwald/x3dom.css" />
        <link rel="stylesheet" type="text/css" href="https://assets.uits.iu.edu/css/iu-brand.css"/>
        <link rel="stylesheet" type="text/css" href="brandingbar.css"/>
        
    </head>

    <body>
        <div id="branding-bar-v1" itemscope="itemscope" itemtype="http://schema.org/CollegeOrUniversity">
            <div class="bar">
                <div class="container">
                    <div class="unit whole">
                        <h1 class="campus">
                            <a href="http://www.iu.edu" title="Indiana University">
                                <img src="//assets.iu.edu/brand/1.x/trident-tab.gif" height="73" width="64" alt=" " />
                                <span class="show-on-desktop" itemprop="name sourceOrganization provider">Indiana University</span>
                                <span class="show-on-tablet" itemprop="name sourceOrganization provider">Indiana University</span>
                                <span class="show-on-mobile" itemprop="name sourceOrganization provider">Indiana University</span>
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        
       <div id="wrapper">
           <div class="include">
               
               
               
               
               
               
               
               <div class="noPrint" id="topnav-full"><ul><li class="first"> 
                   
                   
                   <a href="http://kb.iu.edu" target="_blank" title="">Knowledge Base</a> 
               </li><li> 
                   
                   
                   <a href="http://uits.iu.edu" target="_blank" title="">UITS</a> 
               </li></ul></div>
               
           </div>      
           
           <div class="include">
               
               
               
               
               
               
               
               <div id="fullbanner"><div class="trans">
                   
                   <h1><a href="http://rt.uits.iu.edu/">UITS Research Technologies</a></h1>
                   
                   
                   
                   <span class="tagline">Cyberinfrastructure enabling research and creative activities</span></div>  <a href="http://rt.uits.iu.edu/"><img class="noPrint" alt="banner-image" style="width:100%; max-height:100px;" src="http://rt.uits.iu.edu/files/images/datacenter083-banner2.png"/></a></div>
               
           </div>      
        <div id="x3dDiv">
            
            <h3>Global &amp; International Studies Building Blade Viewer</h3>
        <X3D showStat="false" showLog="TRUE" altImg="helloX3D-alt.png" id="x3delem">
            <Scene>
                <inline id="x3dFile" nameSpaceName="gisbBlades" mapDEFToID="true" url="GISB_blades_v4.x3d"
            </Scene>
        </X3D>
            Views:
            <button onclick="document.getElementById('gisbBlades__overview').setAttribute('set_bind','true');">Overview</button>
            <button onclick="document.getElementById('gisbBlades__groundFloor').setAttribute('set_bind','true');">Ground floor</button>
            <button onclick="document.getElementById('gisbBlades__firstBridge').setAttribute('set_bind','true');">First floor bridge</button>
            <button onclick="document.getElementById('gisbBlades__firstBridgeCl').setAttribute('set_bind','true');">First floor bridge up close</button>
            <button onclick="document.getElementById('gisbBlades__secondBridge').setAttribute('set_bind','true');">Second floor bridge</button>
            <button onclick="document.getElementById('gisbBlades__secondBridgeCl').setAttribute('set_bind','true');">Second floor bridge up close</button>
            
        </div>
        <div id="imagesDiv">
            <!--<form id="hopeful" action="upload.php" method="post" enctype="multipart/form-data">
            <p>
        Choose an image file to show on the blades or upload your own
                
                    <label for="fileToUpload"> <span class="btn">Upload Image</span></label>
                    <input style="visibility: hidden; position: absolute;" type="file" id="fileToUpload" name="fileToUpload" value="upload file" multiple />                    
                    <input id="testing" class="hidden" type="submit" value="Upload File" name="submit"/>
                -->
             
                  <p>
        Choose an image or movie file to show on the blades or use your own
             
                
                <?php $max_no_img=50; // Maximum number of images value to be set here

echo "<form id='hopeful' method=post action=upload.php enctype='multipart/form-data'>";
echo "<table border='0' width='400' cellspacing='0' cellpadding='0' align=center>";
for($i=1; $i<=$max_no_img; $i++){
    echo "<tr class='uploadFileBut' id='imageUpload$i'><td></td><td>
    <input type=file name='image[]' id='$i' class='bginput' value='Choose Another File'></td></tr>";
}?> </table>
        </p>
            <output id="list">
                <img onclick="imageClick(this);" class="thumb active" src="ppt_template_H3.jpg"/>
                <video onclick="removeTexture();videoClick(this);"class="thumb video" controls>
                    <source title='bigBuckBunny.ogv' src='bigBuckBunny.ogv'></source>
                </video>
            </output>
            <input type='submit' value='Upload Files'>
</form>

        </div>
        
        
       </div>
        
        <div class="imageLibrary"></div>
        
        
       </div>  <footer id="footer-v1" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/CollegeOrUniversity">
           <div class="wrapper">
               <p class="tagline">Fulfilling <span>the</span> Promise</p>
           </div>
           <div class="container kill-vertical">
               <div class="unit whole">
                   <span class="signature">
                       <img src="https://assets.uits.iu.edu/image/iu-sig.2x.png" width="236" height="36">
                   </span>
                   <p class="copyright"><a href="http://www.iu.edu/comments/copyright.shtml" target="_blank">Copyright</a> © 2015 The Trustees of <a href="http://www.iu.edu/" target="_blank">Indiana University</a> | <a href="http://www.iu.edu/comments/complaint.shtml" target="_blank">Copyright Complaints</a> | <a href="http://it.iu.edu/privacy">Privacy Notice</a></p>
               </div>
           </div>
       </footer>                     
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="x3dom-full-physics.js"></script>
        <script type="text/javascript" src="bladeViewer.js"></script>
        
    </body>
</html>
