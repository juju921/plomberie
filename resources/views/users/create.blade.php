@include('layouts.header')

<div class="app-container">

    <nav class="navbar navbar-default" id="navbar">
        <div class="container-fluid">
            <div class="navbar-collapse collapse in">
                <ul class="nav navbar-nav navbar-mobile">
                    <li>
                        <button type="button" class="sidebar-toggle">
                            <i class="fa fa-bars"></i>
                        </button>
                    </li>
                    <li class="logo">
                        <a class="navbar-brand" href="#"><span class="highlight">Flat v3</span> Admin</a>
                    </li>
                    <li>
                        <button type="button" class="navbar-toggle">
                            <img class="profile-img" src="./assets/images/profile.png">
                        </button>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-left">
                    <li class="navbar-title">Dashboard</li>
                    <li class="navbar-search hidden-sm">
                        <input id="search" type="text" placeholder="Search..">
                        <button class="btn-search"><i class="fa fa-search"></i></button>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown notification">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <div class="icon"><i class="fa fa-shopping-basket" aria-hidden="true"></i></div>
                            <div class="title">New Orders</div>
                            <div class="count">0</div>
                        </a>
                        <div class="dropdown-menu">
                            <ul>
                                <li class="dropdown-header">Ordering</li>
                                <li class="dropdown-empty">No New Ordered</li>
                                <li class="dropdown-footer">
                                    <a href="#">View All <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown notification warning">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <div class="icon"><i class="fa fa-comments" aria-hidden="true"></i></div>
                            <div class="title">Unread Messages</div>
                            <div class="count">99</div>
                        </a>
                        <div class="dropdown-menu">
                            <ul>
                                <li class="dropdown-header">Message</li>
                                <li>
                                    <a href="#">
                                        <span class="badge badge-warning pull-right">10</span>
                                        <div class="message">
                                            <img class="profile" src="https://placehold.it/100x100">
                                            <div class="content">
                                                <div class="title">"Payment Confirmation.."</div>
                                                <div class="description">Alan Anderson</div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="badge badge-warning pull-right">5</span>
                                        <div class="message">
                                            <img class="profile" src="https://placehold.it/100x100">
                                            <div class="content">
                                                <div class="title">"Hello World"</div>
                                                <div class="description">Marco  Harmon</div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="badge badge-warning pull-right">2</span>
                                        <div class="message">
                                            <img class="profile" src="https://placehold.it/100x100">
                                            <div class="content">
                                                <div class="title">"Order Confirmation.."</div>
                                                <div class="description">Brenda Lawson</div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="#">View All <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown notification danger">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <div class="icon"><i class="fa fa-bell" aria-hidden="true"></i></div>
                            <div class="title">System Notifications</div>
                            <div class="count">10</div>
                        </a>
                        <div class="dropdown-menu">
                            <ul>
                                <li class="dropdown-header">Notification</li>
                                <li>
                                    <a href="#">
                                        <span class="badge badge-danger pull-right">8</span>
                                        <div class="message">
                                            <div class="content">
                                                <div class="title">New Order</div>
                                                <div class="description">$400 total</div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="badge badge-danger pull-right">14</span>
                                        Inbox
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="badge badge-danger pull-right">5</span>
                                        Issues Report
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="#">View All <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown profile">
                        <a href="/html/pages/profile.html" class="dropdown-toggle"  data-toggle="dropdown">
                            <img class="profile-img" src="./assets/images/profile.png">
                            <div class="title">Profile</div>
                        </a>
                        <div class="dropdown-menu">
                            <div class="profile-info">
                                <h4 class="username">Scott White</h4>
                            </div>
                            <ul class="action">
                                <li>
                                    <a href="#">
                                        Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="badge badge-danger pull-right">5</span>
                                        My Inbox
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Setting
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            Ajouter un client
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">

                    <label for="nBatiment">n° du batiment</label>
                    <input type="text" class="form-control" placeholder="n° du batiment" id="nBatiment">

                    <label for="firstName">prénom</label>
                    <input type="text" class="form-control" placeholder="prénom" id="firstName">



                    <label for="name">nom</label>
                    <input type="text" class="form-control" placeholder="nom" id="name">



                    <label for="adress">n° du batiment</label>
                    <input type="text" class="form-control" placeholder="adresse" id="adress">



                    <label for="nBatiment">adresse</label>
                    <input type="text" class="form-control" placeholder="n° du batiment" id="nBatiment">




                    <label for="inovoiceAdress">Adresse de facturation</label>
                    <input type="text" class="form-control" placeholder="Adresse de facturation" id="inovoiceAdress">




    </div>
                <div class="col-md-6">

                    <label for="habitation">type de logement</label>

                    <select class="form-control" id="habitation">
                        <option value="Maison">Maison</option>
                        <option value="Appartement">Appartement</option>
                    </select>

                    <label for="accesCode">code d'accès</label>
                    <input type="text" class="form-control" placeholder="code d'accès" id="accesCode">


                    <label for="accesCode2">code d'accès n°2</label>
                    <input type="text" class="form-control" placeholder="code d'accès n°2" id="accesCode2">

                    <label for="phoneNumber">numéro de téléphone</label>
                    <input type="text" class="form-control" placeholder="numéro de téléphone" id="phoneNumber">


                    <label for="fax">fax</label>
                    <input type="text" class="form-control" placeholder="fax" id="fax">


                    <label for="mobileNumber">numéro de portable</label>
                    <input type="text" class="form-control" placeholder="numéro de portable" id="mobileNumber">

                </div>
</div>


</div>

    </div>