<?php $index = 2;?>
<div class="card card-sidebar-mobile  noprint">
	<ul class="nav nav-sidebar" data-nav-type="accordion">
		<!-- Main -->
		<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
		<li class="nav-item">
			<a href="{{route('home')}}" class="nav-link{{ Request::is('home')  ? ' active' : '' }}">
				<i class="icon-home4"></i>
				<span>
					Dashboard
				</span>
			</a>
		</li>
        <li class="nav-item">
            <a href="{{route('user.subscription')}}" class="nav-link{{ Request::is('user/subscription')  ? ' actve' : '' }}">
                <i class="icon-play"></i>
                <span>
					Subscription
				</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link{{ Request::is('home')  ? ' actve' : '' }}">
                <i class="icon-user"></i>
                <span>
					Profile
				</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link{{ Request::is('home')  ? ' actve' : '' }}">
                <i class="icon-comments"></i>
                <span>
					Message
				</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link{{ Request::is('home')  ? ' actve' : '' }}">
                <i class="icon-coin-dollar"></i>
                <span>
					Payment
				</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link{{ Request::is('home')  ? ' actve' : '' }}">
                <i class="icon-history"></i>
                <span>
					History
				</span>
            </a>
        </li>
	</ul>
</div>
