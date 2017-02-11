
@extends('layouts.master')

@section('content')
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
                                                <div class="description">Marco Harmon</div>
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
                        <a href="/html/pages/profile.html" class="dropdown-toggle" data-toggle="dropdown">
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


    <div class="col-md-12" id="manage-vue">
        <div class="card">
            <div class="card-header">
                Basic Elements
            </div>

            <form method="POST" action="/inovoices">
            {{ csrf_field() }}

                <notification></notification>

                <div v-for="user in users">
                                @{{ user.name }}

                    @{{ user.firstName }} 
                      </div>
  

            </form>

        </div>



       

        </div>

        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create-item">
            Create Item
        </button>

        <div id="manage-itelm">
            <!-- Create Item Modal -->
            <div class="modal fade" id="create-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                        </div>
                        <div class="modal-body" style="overflow:hidden;">


                            <form method="POST" enctype="multipart/form-data" v-on:submit.prevent="createItem" >

<div class="form-group">
 <div class="col-md-12">
            <div class="well well-sm">
                <div class="form-group">
                    <div class="input-group input-group-md">
                        <div class="icon-addon addon-md">
                            <input type="text" placeholder="What are you looking for?" class="form-control" v-model="query" >
    
                        </div>
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"  v-on:click="search()" v-if="!loading">Search!</button>
                            <button class="btn btn-default" type="button" disabled="disabled" v-if="loading">Searching...</button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="alert alert-danger" role="alert" v-if="error">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                @{{ error }}
            </div>
            <div id="products" class="row list-group">
                <div class="item col-md-12" v-for="user in users">
                    <div class="thumbnail">
                        <div class="caption">
                            <h4 class="group inner list-group-item-heading"  >@{{ user.name }}</h4>
                              <input type="hidden" name="country"  v-model="user.name" >

                            <p class="group inner list-group-item-text" >@{{ user.firstName }}</p>
                        <input type="hidden" name="country"  v-model="user.firstName" >

                                <div class="col-xs-12 col-md-6">
                                    <button type="submit" class="btn btn-success">ajouter</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>










                              {{--  <div class="form-group">
                                    <label for="title">Title:</label>
                                    <input type="text" name="title" class="form-control"  />
                                </div>

                                <div class="form-group">
                                    <label for="title">Description:</label>
                                    <textarea name="description" class="form-control" ></textarea>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>--}}

                            </form>


                        </div>
                    </div>
                </div>

            </div>
            <!-- Edit Item Modal -->






        </div>



        @endsection

@push('scripts')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
<script  src="{{asset('js/vendor.js')}}" ></script>
<script  src="{{asset('js/apps.js')}}" ></script>
 <script src="https://cdn.jsdelivr.net/vue.resource/1.2.0/vue-resource.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

<script src="{{asset('js/app.js')}}"></script>


@endpush