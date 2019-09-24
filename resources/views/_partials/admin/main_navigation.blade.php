<?php $index = 2;?>
<div class="card card-sidebar-mobile  noprint">
	<ul class="nav nav-sidebar" data-nav-type="accordion">
		<!-- Main -->
		<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
		<li class="nav-item">
			<a href="{{route('admin.dashboard')}}" class="nav-link{{ (Request::is('admin') OR Request::is('admin/dashboard')) ? ' active' : '' }}">
				<i class="icon-home4"></i>
				<span>
					{{_('Dashboard')}}
				</span>
			</a>
		</li>
        <li class="nav-item">
            <a href="{{route('admin.dashboard')}}" class="nav-link{{ (Request::is('admin') OR Request::is('admin/dashboard')) ? ' acive' : '' }}">
                <i class="icon-stats-growth2"></i>
                <span>
					{{_('Traffic Sourse')}}
				</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.dashboard')}}" class="nav-link{{ (Request::is('admin') OR Request::is('admin/dashboard')) ? ' acive' : '' }}">
                <i class="icon-chart"></i>
                <span>
					{{_('Sales')}}
				</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.nextdelivery')}}" class="nav-link{{ Request::is('admin/nextdelivery*') ? ' active' : '' }}">
                <i class="icon-sort-time-asc"></i>
                <span>
					{{_('Next Delivery')}}
				</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.messege.index')}}" class="nav-link{{ Request::is('admin/message*') ? ' active' : '' }}">
                <i class="icon-comments"></i>
                <span>
					{{_('Message')}}
				</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.member') }}" class="nav-link{{ Request::is('admin/member*') ? ' active' : '' }}">
                <i class="icon-user"></i>
                <span>
					{{_('Member')}}
				</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.coffee.index')}}" class="nav-link {{ Request::is('admin/coffee*') ? ' active' : '' }}">
                <i class="icon-play"></i>
                <span>
					{{__('Coffee')}}
				</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.package.index')}}" class="nav-link{{ Request::is('admin/package*') ? ' active' : '' }}">
                <i class="icon-play"></i>
                <span>
					{{__('Product Plan')}}
				</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.dashboard')}}" class="nav-link{{ (Request::is('admin') OR Request::is('admin/dashboard')) ? ' actve' : '' }}">
                <i class="icon-paste"></i>
                <span>
					{{_('Pages')}}
				</span>
            </a>
        </li>

          <li class="nav-item">
            <a href="{{route('admin.api')}}" class="nav-link{{ (Request::is('admin') OR Request::is('admin/api')) ? ' actve' : '' }}">
                <i class="icon-paste"></i>
                <span>
                    {{_('Api')}}
                </span>
            </a>
        </li>
	</ul>
</div>
