<ul class="sidebar-menu" style="list-style: none; padding: 0px;">
            <li><a href="{{ route('home') }}" class="navio"> Dashboard</a></li>
            <li><a href="#" class="navio"> Students</a></li>
            <li><a href="#" class="navio"> Invoices</a></li>
            <li><a href="#" class="navio"> Payments</a></li>
            <li data-toggle="collapse" data-target="#sms" class="navio">SMS 
            <span class="arrow"></span>
            </li>
            <ul class="sub-menu collapse" id="sms">
            <a href="#" class="navio" style="width: 110% ; margin-left: -10%">Inbox</a>
            <a href="#" class="navio" style="width: 110% ; margin-left: -10%">Sent</a>
            </ul>
      <li>
      <a href="{{ route('schools.index') }}" class="navio">School</a></li>
      <li><a href="#" class="navio"><i class="fa fa-envelope"></i> Emails</a></li>
      <li><a href="#" class="navio"><i class="fa fa-user"></i> View users</a></li>
  </ul>