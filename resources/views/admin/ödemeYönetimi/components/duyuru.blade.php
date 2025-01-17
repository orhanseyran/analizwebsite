
<style>
    .event-list .event-item {
    padding: 1rem 1.9rem;
    margin: 0 0.9375rem 1.875rem 0.9375rem;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
    -webkit-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
    -moz-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
    -ms-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
}

.event-list .event-item.featured {
    border: 1.5px solid #68cbd7;
}

.event-list .event-item .event-schedule {
    color: #3c4142;
    margin-bottom: 0.625rem;
}

.event-list .event-item .event-schedule .event-icon {
    stroke-width: 1px;
    width: 1.125rem;
    height: 1.125rem;
    margin: 0.6875rem 1rem 0 0;
}

.event-list .event-item .event-schedule .event-day {
    font-size: 70px;
    font-weight: 200;
    margin-right: 1rem;
    line-height: 100%;
}

.event-list .event-item .event-schedule .event-month-time {
    font-weight: 200;
    font-size: 22px;
    display: flex;
    line-height: 118%;
    flex-direction: column;
    justify-content: center;
}

.event-list .event-item .event-schedule .event-month-time span {
    display: block;
    text-transform: uppercase;
}

.event-list .event-item .event-title {
    display: block;
    margin-bottom: 0.625rem;
    font-weight: 300;
    color: #3c4142;
}

.event-list .event-item .event-title:hover {
    color: #68cbd7;
    text-decoration: none;
}

.event-list .event-item .event-content {
    color: #b1bac5;
    margin-bottom: 0.625rem;
    font-size: 12px;
    font-weight: 300;
}

.event-list .event-item .event-participants {
    padding: 0;
    margin: 0;
}

.event-list .event-item .event-participants .event-user {
    width: 48px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    border: 2px solid #ffffff;
}

.event-list .event-item .event-participants .event-user .event-user-inital {
    font-size: 13px;
    line-height: 100%;
}

.event-list .event-item .event-participants {
    display: flex !important;
}

.event-list .event-item .event-participants .event-user .event-user-pic {
    width: 100%;
    border-radius: 50%;
}

.event-list .event-item .event-participants li + li {
    margin-left: -10px;
}


.event-list .event-item .event-participants {
    flex-direction: row !important;
}
.event-list .event-item .event-participants {
    padding: 0;
    margin: 0;
}

.bg-soft-primary {
    background-color: #dce3fa;
}

.bg-soft-danger {
    background-color: #fedce0;
}

.bg-soft-info {
    background-color: #d7efff;
}

.bg-soft-success {
    background-color: #d1f6f2;
}

.event-list .event-item .event-schedule, .event-list .event-item .event-participants{
    display: flex !important;
}


.owl-prev {
  width: 100px;
  height: 100%;
  position: absolute;
  top: 0;
  margin-left: 0;
  display: block !important;
  background-image: linear-gradient(to right, #F4F7FD, transparent) !important;
}

.owl-prev .owl-nav-wrapper {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.owl-prev .owl-nav-wrapper svg, .owl-prev .owl-nav-wrapper i {
  color: #ffffff;
  width: 20px;
  height: 20px;
}

.owl-next {
  width: 100px;
  height: 100%;
  position: absolute;
  top: 0;
  right: 0;
  display: block !important;
  background-image: linear-gradient(to right, transparent, #F4F7FD) !important;
}

.owl-next .owl-nav-wrapper {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-left: auto;
}

.owl-next .owl-nav-wrapper svg, .owl-next .owl-nav-wrapper i {
  color: #ffffff;
  width: 20px;
  height: 20px;
}

.owl-dots {
  text-align: center;
  margin-top: .5rem;
}

.owl-dots .owl-dot {
  width: 10px;
  height: 10px;
  border-radius: 100%;
  background: #cbcbcb !important;
  margin-right: 5px;
  display: inline-block;
}

.owl-dots .owl-dot.active {
  background: #757575 !important;
}

.text-primary, .task-list-wrapper .completed .remove {
    color: #4e73e5 !important;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
<div style="width: 85%" class="container">
<div class="row">
    <div class="col-12">
        <div id="events" class="event-list owl-carousel owl-loaded owl-drag">
            <div class="owl-stage-outer">
                <div class="owl-stage">
                    <div class="owl-item cloned" style="width: 325px;">
                        <div class="event-item">
                            <div class="event-schedule">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-calendar event-icon">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg>
                                <span class="event-day">12</span>
                                <div class="event-month-time">
                                    <span>nov</span>
                                    <span>13:00</span>
                                </div>
                            </div>
                            <a href="#" class="event-title">Conference meeting</a>
                            <p class="event-content">ERP system conference in Canada team</p>
                            <ul class="event-participants">
                                <li class="event-user" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Tommy C</b>">
                                    <img class="event-user-pic" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Profile Pic" />
                                </li>
                                <li class="event-user bg-soft-primary" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Alison G</b>">
                                    <span class="event-user-inital text-primary">AG</span>
                                </li>
                                <li class="event-user" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Brad P</b>">
                                    <img class="event-user-pic" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Profile Pic" />
                                </li>
                                <li class="event-user" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Saun K</b>">
                                    <img class="event-user-pic" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Profile Pic" />
                                </li>
                                <li class="event-user bg-soft-info" data-original-title="" title="">
                                    <span class="event-user-inital text-dark">+40</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 325px;">
                        <div class="event-item">
                            <div class="event-schedule">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-calendar event-icon">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg>
                                <span class="event-day">12</span>
                                <div class="event-month-time">
                                    <span>nov</span>
                                    <span>13:00</span>
                                </div>
                            </div>
                            <a href="#" class="event-title">Conference meeting</a>
                            <p class="event-content">ERP system conference in Canada team</p>
                            <ul class="event-participants">
                                <li class="event-user" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Tommy C</b>">
                                    <img class="event-user-pic" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Profile Pic" />
                                </li>
                                <li class="event-user bg-soft-primary" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Alison G</b>">
                                    <span class="event-user-inital text-primary">AG</span>
                                </li>
                                <li class="event-user" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Brad P</b>">
                                    <img class="event-user-pic" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Profile Pic" />
                                </li>
                                <li class="event-user" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Saun K</b>">
                                    <img class="event-user-pic" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Profile Pic" />
                                </li>
                                <li class="event-user bg-soft-info" data-original-title="" title="">
                                    <span class="event-user-inital text-dark">+40</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 325px;">
                        <div class="event-item featured">
                            <div class="event-schedule">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-calendar event-icon">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg>
                                <span class="event-day">20</span>
                                <div class="event-month-time">
                                    <span>nov</span>
                                    <span>18:00</span>
                                </div>
                            </div>
                            <a href="#" class="event-title">Cocktail party</a>
                            <p class="event-content">Cocktail party with +One management</p>
                            <ul class="event-participants">
                                <li class="event-user" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Keith J</b>">
                                    <img class="event-user-pic" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Profile Pic" />
                                </li>
                                <li class="event-user bg-soft-primary" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Massi J</b>">
                                    <span class="event-user-inital text-primary">MS</span>
                                </li>
                                <li class="event-user" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Lex L</b>">
                                    <img class="event-user-pic" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Profile Pic" />
                                </li>
                                <li class="event-user bg-soft-danger" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Sam R</b>">
                                    <span class="event-user-inital text-danger">SR</span>
                                </li>
                                <li class="event-user bg-soft-info" data-original-title="" title="">
                                    <span class="event-user-inital text-dark">+99</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 325px;">
                        <div class="event-item">
                            <div class="event-schedule">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-calendar event-icon">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg>
                                <span class="event-day">30</span>
                                <div class="event-month-time">
                                    <span>dec</span>
                                    <span>22:00</span>
                                </div>
                            </div>
                            <a href="#" class="event-title">Review house infra</a>
                            <p class="event-content">Invitation from Axiom Infra Inc. for project</p>
                            <ul class="event-participants">
                                <li class="event-user" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Antonio J</b>">
                                    <img class="event-user-pic" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Profile Pic" />
                                </li>
                                <li class="event-user" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Ronald M</b>">
                                    <img class="event-user-pic" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Profile Pic" />
                                </li>
                                <li class="event-user" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Lucy P</b>">
                                    <img class="event-user-pic" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Profile Pic" />
                                </li>
                                <li class="event-user bg-soft-danger" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Sam W</b>">
                                    <span class="event-user-inital text-danger">SW</span>
                                </li>
                                <li class="event-user bg-soft-info" data-original-title="" title="">
                                    <span class="event-user-inital text-dark">+60</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    {{-- <div class="owl-item cloned" style="width: 325px;">
                        <div class="event-item">
                            <div class="event-schedule">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-calendar event-icon">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg>
                                <span class="event-day">8</span>
                                <div class="event-month-time">
                                    <span>jan</span>
                                    <span>15:00</span>
                                </div>
                            </div>
                            <a href="#" class="event-title">Dinner Meet</a>
                            <p class="event-content">Dinner with Microsoft chief managers</p>
                            <ul class="event-participants">
                                <li class="event-user bg-soft-success" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Alex K</b>">
                                    <span class="event-user-inital text-success">AK</span>
                                </li>
                                <li class="event-user bg-soft-primary" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Don Jasua</b>">
                                    <img class="event-user-pic" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Profile Pic" />
                                </li>
                                <li class="event-user bg-soft-warning" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Becka Jasua</b>">
                                    <span class="event-user-inital text-warning">BC</span>
                                </li>
                                <li class="event-user bg-soft-danger" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Max C</b>">
                                    <span class="event-user-inital text-danger">MC</span>
                                </li>
                                <li class="event-user bg-soft-info" data-original-title="" title="">
                                    <span class="event-user-inital text-dark">+80</span>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                    {{-- <div class="owl-item active" style="width: 325px;">
                        <div class="event-item">
                            <div class="event-schedule">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-calendar event-icon">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg>
                                <span class="event-day">28</span>
                                <div class="event-month-time">
                                    <span>oct</span>
                                    <span>20:00</span>
                                </div>
                            </div>
                            <a href="#" class="event-title">Hire Developer</a>
                            <p class="event-content">Meeting is scheduled to hire developer</p>
                            <ul class="event-participants">
                                <li class="event-user bg-soft-success" data-toggle="tooltip" data-skin-class="tooltip-base" data-html="true" data-placement="top" title="" data-original-title="<b>Camron D</b>">
                                    <span class="event-user-inital text-success">CD</span>
                                </li>
                                <li class="event-user bg-soft-primary" data-toggle="tooltip" data-skin-class="tooltip-base" data-html="true" data-placement="top" title="" data-original-title="<b>Pam A</b>">
                                    <span class="event-user-inital text-primary">PA</span>
                                </li>
                                <li class="event-user" data-toggle="tooltip" data-skin-class="tooltip-base" data-html="true" data-placement="top" title="" data-original-title="<b>William S</b>">
                                    <img class="event-user-pic" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Profile Pic" />
                                </li>
                                <li class="event-user bg-soft-danger" data-toggle="tooltip" data-skin-class="tooltip-base" data-html="true" data-placement="top" title="" data-original-title="<b>Ron M</b>">
                                    <span class="event-user-inital text-danger">RM</span>
                                </li>
                                <li class="event-user bg-soft-info" data-original-title="" title="">
                                    <span class="event-user-inital text-dark">+30</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 325px;">
                        <div class="event-item">
                            <div class="event-schedule">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-calendar event-icon">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg>
                                <span class="event-day">12</span>
                                <div class="event-month-time">
                                    <span>nov</span>
                                    <span>13:00</span>
                                </div>
                            </div>
                            <a href="#" class="event-title">Conference meeting</a>
                            <p class="event-content">ERP system conference in Canada team</p>
                            <ul class="event-participants">
                                <li class="event-user" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Tommy C</b>">
                                    <img class="event-user-pic" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Profile Pic" />
                                </li>
                                <li class="event-user bg-soft-primary" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Alison G</b>">
                                    <span class="event-user-inital text-primary">AG</span>
                                </li>
                                <li class="event-user" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Brad P</b>">
                                    <img class="event-user-pic" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Profile Pic" />
                                </li>
                                <li class="event-user" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Saun K</b>">
                                    <img class="event-user-pic" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Profile Pic" />
                                </li>
                                <li class="event-user bg-soft-info" data-original-title="" title="">
                                    <span class="event-user-inital text-dark">+40</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 325px;">
                        <div class="event-item featured">
                            <div class="event-schedule">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-calendar event-icon">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg>
                                <span class="event-day">20</span>
                                <div class="event-month-time">
                                    <span>nov</span>
                                    <span>18:00</span>
                                </div>
                            </div>
                            <a href="#" class="event-title">Cocktail party</a>
                            <p class="event-content">Cocktail party with +One management</p>
                            <ul class="event-participants">
                                <li class="event-user" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Keith J</b>">
                                    <img class="event-user-pic" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Profile Pic" />
                                </li>
                                <li class="event-user bg-soft-primary" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Massi J</b>">
                                    <span class="event-user-inital text-primary">MS</span>
                                </li>
                                <li class="event-user" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Lex L</b>">
                                    <img class="event-user-pic" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Profile Pic" />
                                </li>
                                <li class="event-user bg-soft-danger" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Sam R</b>">
                                    <span class="event-user-inital text-danger">SR</span>
                                </li>
                                <li class="event-user bg-soft-info" data-original-title="" title="">
                                    <span class="event-user-inital text-dark">+99</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 325px;">
                        <div class="event-item">
                            <div class="event-schedule">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-calendar event-icon">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg>
                                <span class="event-day">30</span>
                                <div class="event-month-time">
                                    <span>dec</span>
                                    <span>22:00</span>
                                </div>
                            </div>
                            <a href="#" class="event-title">Review house infra</a>
                            <p class="event-content">Invitation from Axiom Infra Inc. for project</p>
                            <ul class="event-participants">
                                <li class="event-user" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Antonio J</b>">
                                    <img class="event-user-pic" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Profile Pic" />
                                </li>
                                <li class="event-user" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Ronald M</b>">
                                    <img class="event-user-pic" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Profile Pic" />
                                </li>
                                <li class="event-user" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Lucy P</b>">
                                    <img class="event-user-pic" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Profile Pic" />
                                </li>
                                <li class="event-user bg-soft-danger" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Sam W</b>">
                                    <span class="event-user-inital text-danger">SW</span>
                                </li>
                                <li class="event-user bg-soft-info" data-original-title="" title="">
                                    <span class="event-user-inital text-dark">+60</span>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                    {{-- <div class="owl-item" style="width: 325px;">
                        <div class="event-item">
                            <div class="event-schedule">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-calendar event-icon">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg>
                                <span class="event-day">8</span>
                                <div class="event-month-time">
                                    <span>jan</span>
                                    <span>15:00</span>
                                </div>
                            </div>
                            <a href="#" class="event-title">Dinner Meet</a>
                            <p class="event-content">Dinner with Microsoft chief managers</p>
                            <ul class="event-participants">
                                <li class="event-user bg-soft-success" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Alex K</b>">
                                    <span class="event-user-inital text-success">AK</span>
                                </li>
                                <li class="event-user bg-soft-primary" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Don Jasua</b>">
                                    <img class="event-user-pic" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Profile Pic" />
                                </li>
                                <li class="event-user bg-soft-warning" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Becka Jasua</b>">
                                    <span class="event-user-inital text-warning">BC</span>
                                </li>
                                <li class="event-user bg-soft-danger" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Max C</b>">
                                    <span class="event-user-inital text-danger">MC</span>
                                </li>
                                <li class="event-user bg-soft-info" data-original-title="" title="">
                                    <span class="event-user-inital text-dark">+80</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 325px;">
                        <div class="event-item">
                            <div class="event-schedule">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-calendar event-icon">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg>
                                <span class="event-day">28</span>
                                <div class="event-month-time">
                                    <span>oct</span>
                                    <span>20:00</span>
                                </div>
                            </div>
                            <a href="#" class="event-title">Hire Developer</a>
                            <p class="event-content">Meeting is scheduled to hire developer</p>
                            <ul class="event-participants">
                                <li class="event-user bg-soft-success" data-toggle="tooltip" data-skin-class="tooltip-base" data-html="true" data-placement="top" title="" data-original-title="<b>Camron D</b>">
                                    <span class="event-user-inital text-success">CD</span>
                                </li>
                                <li class="event-user bg-soft-primary" data-toggle="tooltip" data-skin-class="tooltip-base" data-html="true" data-placement="top" title="" data-original-title="<b>Pam A</b>">
                                    <span class="event-user-inital text-primary">PA</span>
                                </li>
                                <li class="event-user" data-toggle="tooltip" data-skin-class="tooltip-base" data-html="true" data-placement="top" title="" data-original-title="<b>William S</b>">
                                    <img class="event-user-pic" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Profile Pic" />
                                </li>
                                <li class="event-user bg-soft-danger" data-toggle="tooltip" data-skin-class="tooltip-base" data-html="true" data-placement="top" title="" data-original-title="<b>Ron M</b>">
                                    <span class="event-user-inital text-danger">RM</span>
                                </li>
                                <li class="event-user bg-soft-info" data-original-title="" title="">
                                    <span class="event-user-inital text-dark">+30</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 325px;">
                        <div class="event-item">
                            <div class="event-schedule">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-calendar event-icon">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg>
                                <span class="event-day">12</span>
                                <div class="event-month-time">
                                    <span>nov</span>
                                    <span>13:00</span>
                                </div>
                            </div>
                            <a href="#" class="event-title">Conference meeting</a>
                            <p class="event-content">ERP system conference in Canada team</p>
                            <ul class="event-participants">
                                <li class="event-user" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Tommy C</b>">
                                    <img class="event-user-pic" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Profile Pic" />
                                </li>
                                <li class="event-user bg-soft-primary" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Alison G</b>">
                                    <span class="event-user-inital text-primary">AG</span>
                                </li>
                                <li class="event-user" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Brad P</b>">
                                    <img class="event-user-pic" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Profile Pic" />
                                </li>
                                <li class="event-user" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Saun K</b>">
                                    <img class="event-user-pic" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Profile Pic" />
                                </li>
                                <li class="event-user bg-soft-info" data-original-title="" title="">
                                    <span class="event-user-inital text-dark">+40</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 325px;">
                        <div class="event-item featured">
                            <div class="event-schedule">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-calendar event-icon">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg>
                                <span class="event-day">20</span>
                                <div class="event-month-time">
                                    <span>nov</span>
                                    <span>18:00</span>
                                </div>
                            </div>
                            <a href="#" class="event-title">Cocktail party</a>
                            <p class="event-content">Cocktail party with +One management</p>
                            <ul class="event-participants">
                                <li class="event-user" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Keith J</b>">
                                    <img class="event-user-pic" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Profile Pic" />
                                </li>
                                <li class="event-user bg-soft-primary" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Massi J</b>">
                                    <span class="event-user-inital text-primary">MS</span>
                                </li>
                                <li class="event-user" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Lex L</b>">
                                    <img class="event-user-pic" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Profile Pic" />
                                </li>
                                <li class="event-user bg-soft-danger" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Sam R</b>">
                                    <span class="event-user-inital text-danger">SR</span>
                                </li>
                                <li class="event-user bg-soft-info" data-original-title="" title="">
                                    <span class="event-user-inital text-dark">+99</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 325px;">
                        <div class="event-item">
                            <div class="event-schedule">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-calendar event-icon">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg>
                                <span class="event-day">30</span>
                                <div class="event-month-time">
                                    <span>dec</span>
                                    <span>22:00</span>
                                </div>
                            </div>
                            <a href="#" class="event-title">Review house infra</a>
                            <p class="event-content">Invitation from Axiom Infra Inc. for project</p>
                            <ul class="event-participants">
                                <li class="event-user" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Antonio J</b>">
                                    <img class="event-user-pic" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Profile Pic" />
                                </li>
                                <li class="event-user" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Ronald M</b>">
                                    <img class="event-user-pic" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Profile Pic" />
                                </li>
                                <li class="event-user" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Lucy P</b>">
                                    <img class="event-user-pic" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Profile Pic" />
                                </li>
                                <li class="event-user bg-soft-danger" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="<b>Sam W</b>">
                                    <span class="event-user-inital text-danger">SW</span>
                                </li>
                                <li class="event-user bg-soft-info" data-original-title="" title="">
                                    <span class="event-user-inital text-dark">+60</span>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="owl-nav">

   
            </div>
           
        </div>
    </div>
</div>
</div>
<script>
    (function($) {
    'use strict';
    $(function () {
        //Event carousel
        $("#events").owlCarousel({
            loop:true,
            margin:0,
            autoPlay: 3000,
            responsive:{
                0:{
                    items:1
                },
                768:{
                    items:2
                },
                979:{
                    items:3
                },
                1199:{
                    items:4
                }
            },
            singleItem : false,
            dots: false,
            nav: true,
            navText : ["",""]
        });
        $(".btn-event-show").collapse();
        //Events: Tooltip
        $('.event-user').tooltip({ boundary: 'window' });
        feather.replace();
    });
})(jQuery); 


</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

