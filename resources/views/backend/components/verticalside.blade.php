<div class="deznav">
    <div class="deznav-scroll">
        <div class="main-profile">
            <div class="image-bx">
            <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="70" height="70" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                <a href="javascript:void(0);"><i class="fa fa-cog" aria-hidden="true"></i></a>
            </div>
            <h5 class="name"><span class="font-w400">Hello,</span> {{Auth::user()->name}}</h5>
            <p class="email">{{Auth::user()->email}}</p>
        </div>
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Menu</li>
            <li><a class="" href="{{route('back.home')}}" aria-expanded="false">
                    <i class="flaticon-144-layout"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li><a class="ai-icon" href="{{route('bestinvest')}}" aria-expanded="false">
                    <i class="flaticon-381-user-4"></i>
                    <span class="nav-text">Investisseurs</span>
                </a>
            </li>
            <li class="nav-label">onglets</li>
            <li><a class="ai-icon" href="{{route('findprofile')}}" aria-expanded="false">
                    <i class="flaticon-077-menu-1"></i>
                    <span class="nav-text">Mon profil</span>
                </a>
            </li>
            <li><a class="ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-settings-2"></i>
                    <span class="nav-text">Paramètres</span>
                </a>
            </li>
            <?php if(Auth::user()->role == 'admin'){ ?>
            <li class="nav-label">Administration</li>
            <li>
                <a class="ai-icon" href="{{route('userlist')}}" aria-expanded="false">
                    <i class="flaticon-381-user-9"></i>
                    <span class="nav-text">Utilisateurs</span>
                </a>
            </li>
            <li>
                <a class="ai-icon" href="{{route('sendmailshow')}}" aria-expanded="false">
                    <i class="flaticon-381-send-2"></i>
                    <span class="nav-text">Diffusions de mail</span>
                </a>
            </li>
            <?php } ?>
            <li>
                <a class="ai-icon" href="{{route('showcertificat')}}" aria-expanded="false" target="new">
                    <i class="flaticon-381-file-2"></i>
                    <span class="nav-text">Certificat</span>
                </a>
            </li>

            <!-- <li><a class="ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-network"></i>
                    <span class="nav-text">Transactions</span>
                </a>
            </li> -->
        </ul>
        <!-- <div class="copyright">
            <p><strong>TAGUSDRONE</strong> © 2022 All Rights Reserved</p>
            <p class="fs-12">Made with <span class="heart"></span> by DexignZone</p>
        </div> -->
    </div>
</div>