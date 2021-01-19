<style>


.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;

}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 15px;
  color: #818181;
  display: block;

  transition: 0.3s;
}
.sidebar h3{
  font-size: 17px;
}
.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>

<style>
.collapsible {

  color: white;
  cursor: pointer;
 

  border: none;
  text-align: left;
  outline: none;
  font-size: 12px;
 
}

.collapsible:after {
  content: '\002B';
  color: white;
  font-weight: bold;
 margin-left: 20px;

}

.active:after {
  content: "\2212";
}

.content {
  margin-top: 0;
  max-height: 0;
  overflow: hidden;
  color: white;
  transition: max-height 0.3s ease-out;
  background-color: #000;
}
.content  a.active {
  background-color: #4CAF50;
  color: white;

}

.dashboard{
    width: 98%;
    margin: auto;
    display: flex;
    
    justify-content: space-between;
    background-color: rgba(0,0,0,0.08);

    margin: 0;
    padding-top: 0;
}
.dashboard .side-menu{
    flex-basis: 20%;
    background-color: #fff;
    height: 800px;
    border: 2px solid #000;

}

.dashboard .side-menu .link .collapsible h3{
    color: #000;
    font-weight: 600;
    
    text-transform: capitalize;
}
.dashboard .side-menu .link .content ol li a{
    color: #fff;
    padding:0;
    margin: :0;

}
.dashboard .side-menu .link .content ol li a:hover{
    color: #008000;
    padding:0;
    margin: :0;

}
.dashboard .side-menu .link .content{
    padding:0;
    margin-top :0;
}

.dashboard .film{
    flex-basis: 80%;
    flex-wrap: wrap;

}
</style>
 