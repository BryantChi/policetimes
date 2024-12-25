<li class="nav-item mb-4">
    <a href="{{ route('index') }}" target="_blank" class="nav-link">
        <span class="h5 mr-2 brand-image"><i class="fas fa-external-link-alt"></i></span>
        <p class="h5"> 瀏覽網站</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.adminUsers.index') }}"
        class="nav-link {{ Request::is('admin/adminUsers*') ? 'active' : '' }}">
        <span class="mr-2 brand-image"><i class="fas fa-users-cog"></i></span>
        <p> 管理員</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.seoSettings.index') }}"
       class="nav-link {{ Request::is('admin/seoSettings*') ? 'active' : '' }}">
       <span class="mr-2 brand-image"><i class="fas fa-search"></i></span>
        <p>Seo設定</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.newsInfos.index') }}"
       class="nav-link {{ Request::is('admin/newsInfos*') ? 'active' : '' }}">
        <span class="mr-2 brand-image"><i class="fas fa-newspaper"></i></span>
        <p>最新消息</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('admin.localNewsInfos.index') }}"
       class="nav-link {{ Request::is('admin/localNewsInfos*') ? 'active' : '' }}">
        <span class="mr-2 brand-image"><i class="fas fa-newspaper"></i></span>
        <p>地方要聞</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('admin.advertisementInfos.index') }}"
       class="nav-link {{ Request::is('admin/advertisementInfos*') ? 'active' : '' }}">
        <span class="mr-2 brand-image"><i class="fas fa-newspaper"></i></span>
        <p>廣告</p>
    </a>
</li>


