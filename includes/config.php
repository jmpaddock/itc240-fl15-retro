<?php
//config.php

//This defines the current file name
define ('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//this allows us to add unique info to our pages
switch(THIS_PAGE)
{
    case"experiment.php":
        $title = "My Experiment Title Tag";
        $pageID = "My Experiment Page ID";
        break;

      case"daily.php":
        $title = "My Daily Title Tag";
        $pageID = "My Daily Page ID";
        break;    
        
    default:
        $title = THIS_PAGE;
        $pageID = "Retro Diner";
        
        
      
        

}//end switch

//here are our navigation pages:

$nav1['index.php'] = 'Home Page';
$nav1['experiment.php'] = 'Home';
$nav1['daily.php'] = 'Daily';
$nav1['contact.php'] = 'Contact';

/*foreach($nav1 as $link => $label)
{
    echo "link is $link and label is $label <br />";

}

<ul class="navigation">
				
				<li>
					<a href="index.html">Home</a>
				</li><li>
					<a class="active" href="about.html">About</a>
				</li>
				<li>
					<a href="burger.html">Menu</a>
				</li>
				<li>
					<a href="contact.html">Contact</a>
				</li>
				<li>
					<a href="blog.html">Blog</a>
				</li>
			</ul>


*/



//echo $title;



//die;

/*
Create links inside the header.php file

<li><a href="LINK">LABEL</a></li>
<li><class="active"><a href="LINK">LABEL</a></li>




*/
function makeLinks($arr,$prefix='',$suffix='',$exception='')
{
        $myReturn = '';
        foreach($arr as $link => $label)
    {  $myReturn .= $exception . '<a href="' . $link . '">' . $label . '</a>' . $suffix; 
            
        if(THIS_PAGE == $link){ 
            //current file gets active class
        }else{
        
             $myReturn .= $prefix . '<a href="' . $link . '">' . $label . '</a>' . $suffix;
        
        }
    }    
            

        return $myReturn;

}//end makeLinks()