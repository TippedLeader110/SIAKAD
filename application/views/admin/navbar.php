<style type="text/css">
/* The sidebar menu */
.sidenav {
    height: 100%; /* Full-height: remove this if you want "auto" height */
    width: 200px; /* Set the width of the sidebar */
    position: fixed; /* Fixed Sidebar (stay in place on scroll) */
    top: 0; /* Stay at the top */
    left: 0;
    background-color: #2F669F; /* Black */
    overflow-x: hidden; /* Disable horizontal scroll */
    padding-top: 20px;
}

/* The navigation menu links */
.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 25px;
    color: black;
    display: block;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
    background: gray;
    color: #f1f1f1;
    text-decoration: none;
}

/* Style page content */
.main {
    margin-left: 160px; /* Same as the width of the sidebar */
    padding: 0px 10px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}

hr
{
    color: #4B6EB4;
    background-color: #4B6EB4;
    height: 5px;
}
.active
{
    background-color: #F8F8FE;
}
</style>
<?php 
if ($this->session->admin=='') {
	
echo				"<div class='sidenav' style='margin-top: 50px;border-style: solid;border-color: black;border-width: 2px'> "; 
echo					"<a class= '$home'  href='/project/admin/home/'style='margin-top: 100px'><h4>Beranda</h4></a>";
echo 					"<a class= '$users'  href='/project/admin/users'><h4>Murid</h4></a>";
echo 					"<a class= '$news'  href='/project/admin/news'><h4>Guru</h4></a>";
echo 					"<a class= '$comment'  href='/project/admin/comment'><h4>Kelas</h4></a>";
echo 					"<a  href='/project/admin/logout'><h4>Keluar</h4></a>";
echo				"</div>";
}
	 ?>