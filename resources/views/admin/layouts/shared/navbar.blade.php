<nav class="side-navbar">
    <div class="side-navbar-wrapper">
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
            <h5 class="sidenav-heading">Main</h5>
            <ul id="side-main-menu" class="side-menu list-unstyled">
                <li><a href="{{ route('admin.category.index') }}"> <i class="fa fa-align-justify"></i>Категории</a></li>
                <li><a href="{{ route('admin.tag.index') }}"> <i class="fa fa-tag"></i>Tэги</a></li>
                <li><a href="{{ route('admin.post.index') }}"> <i class="fa fa-file"></i>Посты</a></li>
                <li><a href="{{ route('admin.comment.index') }}"><i class="fa fa-comment"></i>Комментарии</a></li>
                <li><a href="{{ route('admin.user.index') }}"><i class="fa fa-users"></i>Пользователи</a></li>
            </ul>
        </div>
    </div>
</nav>