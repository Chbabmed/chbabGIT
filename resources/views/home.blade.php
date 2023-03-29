<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@1,900,700,500,301,701,300,501,401,901,400,2&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://kit.fontawesome.com/3ad2a3ad85.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Allstyle.css">
    <!-- ======= ReactJs ======= -->
    <script src="https://unpkg.com/react@17/umd/react.development.js" crossorigin></script> 
    <script src="https://unpkg.com/react-dom@17/umd/react-dom.development.js" crossorigin></script>
    <title>dashboard</title>
</head>
<body>
    
    <!-- ===================sidebar====================== -->
    <nav class="sidebar">
        <center>

            <h1 id="logo">G</h1>
          
        </center>
        

        <ul>
            <li>
                <a href="/Dashboard">
                    <span class="icon">
                        <i class="fa-solid fa-chart-line"></i>
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/users_management">
                    <span class="icon">
                        <i class="fa-solid fa-users"></i>
                    </span>
                    <span class="title">Utilisateurs</span>
                </a>
            </li>
            <li>
                <a href="/GestionDesVehicule">
                    <span class="icon">
                        <i class="fa-solid fa-car"></i>
                    </span>
                    <span class="title">Véhicules</span>
                </a>
            </li>
            <li>
                <a href="/vidange">
                    <span class="icon">
                        <i class="fa-solid fa-oil-can"></i>
                    </span>
                    <span class="title">Vidange</span>
                </a>
            </li>
            <li>
                <a href="/reparations">
                    <span class="icon">
                        <i class="fa-solid fa-screwdriver-wrench"></i>
                    </span>
                    <span class="title">Les réparations</span>
                </a>
            </li>
            <li>
                <a href="/missions">
                    <span class="icon">
                        <i class="fa-solid fa-bullseye"></i>
                    </span>
                    <span class="title">Les missions</span>
                </a>
            </li>
            <li>
                <a href="/affectations">
                    <span class="icon">
                        <i class="fa-solid fa-user-tag"></i>
                    </span>
                    <span class="title">Les affectations</span>
                </a>
            </li>
            
        </ul>
    </nav>
    
    <section id="content">

        <!-- ===================topbar================= -->
        <nav>
            <i class="fa-solid fa-bars"></i>
            <span id="title">Dashboard</span>

            <div class="d-flex grid gap-3 ">
                <a href="#" class="notification" onmouseover="menuToggle()";">
                    <i class="fa-regular fa-bell" ></i>
                    <span class="num">1</span>
                </a>

                <!-- *************** drop menu *************** -->
                
                <div class="menu "  onmouseleave="dropToggle();">
                    
                    <ul id="list " >
                        <li><a href="#">Action of admin 1</a></li>
                        <li><a href="#">Action of admin 1</a></li>
                        <li><a href="#">Action of admin 1</a></li>
                        <li><a href="#">Action of admin 1</a></li>
                        <li><a href="#">Action of admin 1</a></li>
                    </ul>

                </div>

                <a href="#" class="">
                    <i class="fa-regular fa-circle-user p-2 g-col-6" id="profil" onmouseover="ProfilToggle()";></i>
                </a>
    
                <!-- *************** drop menu *************** -->
                
                <div class="ProfileMenu"  onmouseleave="dropProfileToggle();">
                    
                    <ul id="list " >
                        <li><a href="#">profil</a></li>
                        <li><a href="#">confidentialité</a></li>
                        <li><a href="#">security</a></li>
                    </ul>

                </div>

                <a href="#">
                    <i class="fa-solid fa-arrow-right-from-bracket p-2 g-col-6 " id="logout"></i>
                </a>
            </div>
        </nav>

        <!-- ======================= card ======================== -->
        <div class="container overflow-hidden text-center">
            <div class="row gx-5">

                <!-- ===========1st card========== -->

                <div class="col ">
                    <div class="p-3 "  >
                        <div class="card shadow bg-body-tertiary rounded" style="width: 18rem;">
                            <div class="card-body">

                                <div class="card-title">
                                    <i class="fa-solid fa-car me-3 d-inline"></i>
                                    <h5 class="desc d-inline">Nombre des Véhicules</h5>
                                </div>
                                <center><hr></center>

                                <p class="card-text">10</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ===========2nd card========== -->
                
                <div class="col ">
                    <div class="p-3 ">
                        <div class="card shadow bg-body-tertiary rounded" style="width: 18rem;">
                            <div class="card-body">

                                <div class="card-title">
                                    <i class="fa-solid fa-users me-3 d-inline"></i>
                                    <h5 class="desc d-inline">Nombre des Utilisateurs</h5>
                                </div>
                                <center><hr></center>

                                <p class="card-text">24</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- ===========3rd card========== -->

                <div class="col ">
                    <div class="p-3 ">
                        <div class="card shadow bg-body-tertiary rounded" style="width: 18rem;">
                            <div class="card-body">

                                <div class="card-title">
                                    <i class="fa-solid fa-users me-3 d-inline"></i>
                                    <h5 class="desc d-inline">Nombre des Véhicules</h5>
                                </div>
                                <center><hr></center>

                                <p class="card-text">10</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===================== tableau ======================= -->
        <div class="container overflow-hidden text-center">
            <div class="row gx-5">
              <div class="col">
               <div class="p-3">

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Immatriculation</th>
                        <th scope="col">La marque</th>
                        <th scope="col">Type d'affectation</th>
                        <th scope="col">Date d'entrer</th>
                        <th scope="col">Date de sortie</th>
                      </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                            <td id="ID">1</td>
                            <td>Med</td>
                            <td>Med</td>
                            <td>Med</td>
                            <td>Med</td>
                            <td>Med</td>
                        </tr>
                        <tr>
                            <td id="ID">2</td>
                            <td>Med</td>
                            <td>Med</td>
                            <td>Med</td>
                            <td>Med</td>
                            <td>Med</td>
                        </tr>
                        <tr>
                            <td id="ID">3</td>
                            <td>Med</td>
                            <td>Med</td>
                            <td>Med</td>
                            <td>Med</td>
                            <td>Med</td>
                        </tr>
                        <tr>
                            <td id="ID">4</td>
                            <td>Med</td>
                            <td>Med</td>
                            <td>Med</td>
                            <td>Med</td>
                            <td>Med</td>
                        </tr>
                    </tbody>
                  </table>

               </div>
              </div>
            </div>
          </div>

          



    </section>
<script src="js/script.js"></script>
<script src="bootstrap-5.3.0-alpha1-dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>
