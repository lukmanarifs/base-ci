<aside id="sidebar" class="column col_side">
    <form class="quick_search">
        <input type="text" value="Quick Search" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
    </form>
    <hr/>
    <h3>Content</h3>
    <ul class="toggle">
        <li class="icn_audio"><a href="<?=base_url()?>webadmin/genre_list">Master Genre</a></li>
        <li class="icn_photo"><a href="javascript:;">Master Paket</a></li>
        <li class="icn_categories"><a href="<?=base_url()?>webadmin/contest_list">Contest List</a></li>
        <!--<li class="icn_categories"><a href="#">Categories</a></li>
        <li class="icn_tags"><a href="#">Tags</a></li>-->
    </ul>
    <h3>Users</h3>
    <ul class="toggle">
        <!-- <li class="icn_add_user"><a href="#">Add New User</a></li> -->
        <li class="icn_view_users"><a href="<?=base_url()?>webadmin/users_list">Users List</a></li>
        <!-- <li class="icn_profile"><a href="#">Your Profile</a></li> -->
    </ul>
    <h3>Admin</h3>
    <ul class="toggle">
        <li class="icn_settings"><a href="javascript:;" onclick="link_menu('setting','Password Manager')">Change Password</a></li>
        <!--<li class="icn_security"><a href="#">Security</a></li>-->
        <li class="icn_jump_back"><a href="<?=base_url()?>webadmin/logout">Logout</a></li>
    </ul>
    <br><br><br><br><br><br><br><br><br><br><br><br>
    <footer>
        <hr />
        <p><strong>Copyright &copy; 2013 LaguMurni.</strong></p>
    </footer>
</aside><!-- end of sidebar -->