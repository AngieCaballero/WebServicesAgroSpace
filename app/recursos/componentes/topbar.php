<!--begin::Toolbar wrapper-->
<div class="topbar d-flex align-items-stretch flex-shrink-0">
	<!--begin::Search-->
	<div class="d-flex align-items-stretch">
	<!--<!==layout-partial:partials/search/_dropdown.html--></div>
	<!--end::Search-->
	<!--begin::Activities-->
	<div class="d-flex align-items-stretch">
		<!--begin::drawer toggle-->
		<div class="topbar-item px-3 px-lg-5" id="kt_activities_toggle">
			<i class="bi bi-box-seam fs-3"></i>
		</div>
		<!--end::drawer toggle-->
	</div>
	<!--end::Activities-->
	<!--begin::Notifications-->
	<div class="d-flex align-items-stretch">
	<!--begin::Menu wrapper-->
	<div class="topbar-item px-3 px-lg-5 position-relative" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
		<i class="bi bi-app-indicator fs-3"></i>
	</div>
	<?php include 'topbar/notificaciones.php'; ?> 
	<!--end::Menu wrapper--></div>
	<!--end::Notifications-->
	<!--begin::Chat-->
	<div class="d-flex align-items-stretch">
		<!--begin::Menu wrapper-->
		<div class="topbar-item px-3 px-lg-5 position-relative" id="kt_drawer_chat_toggle">
			<i class="bi bi-chat-left-text fs-3"></i>
			<span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 mt-4 start-50 animation-blink"></span>
		</div>
		<!--end::Menu wrapper-->
	</div>
	<!--end::Chat-->
	<!--begin::Quick links-->
	<div class="d-flex align-items-stretch">
	<!--begin::Menu wrapper-->
	<div class="topbar-item px-3 px-lg-5" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
		<i class="bi bi-bar-chart fs-3"></i>
	</div>
	<?php include 'topbar/quicklinks.php'; ?> 
	<!--end::Menu wrapper--></div>
	<!--end::Quick links-->
	<!--begin::Theme mode-->
	<div class="d-flex align-items-center">
	<?php include 'topbar/main.php'; ?></div>
	<!--end::Theme mode-->
	<!--begin::User-->
	<div class="d-flex align-items-stretch" id="kt_header_user_menu_toggle">
	<!--begin::Menu wrapper-->
	<div class="topbar-item cursor-pointer symbol px-3 px-lg-5 me-n3 me-lg-n5 symbol-30px symbol-md-35px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
		<img src="assets/media/avatars/300-1.jpg" alt="metronic" />
	</div>
	<?php include 'topbar/usuario.php'; ?>
	<!--end::Menu wrapper--></div>
	<!--end::User -->
	<!--begin::Heaeder menu toggle-->
	<div class="d-flex align-items-stretch d-lg-none px-3 me-n3" title="Show header menu">
		<div class="topbar-item" id="kt_header_menu_mobile_toggle">
			<i class="bi bi-text-left fs-1"></i>
		</div>
	</div>
	<!--end::Heaeder menu toggle-->
</div>
<!--end::Toolbar wrapper-->