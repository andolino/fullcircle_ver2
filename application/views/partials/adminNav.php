<!-- Sidebar  -->
<nav id="sidebar">
  <div class="sidebar-header">
    <div class="row">
      <div class="col-3"><img src="<?= base_url('assets/image/misc/logo.png') ?>" width="50"></div>
      <div class="col-9"><h4 style="line-height: 2.1">CPFI SYSTEM </h4></div>
    </div>
    
  </div>

  <ul class="list-unstyled components">
      <p class="text-center"> WELCOME <?php echo strtoupper($this->session->username); ?></p>
      <li>
        <a href="<?php echo base_url(); ?>" class="font-12"><i class="fas fa-users"></i> ABOUT US</a>
      </li>
			<?php if($userPriv->level == 0): ?>
      <li>
        <a href="<?php echo base_url(); ?>member-list"><i class="fas fa-tasks"></i> MEMBER LIST</a>
      </li>
			<?php endif; ?> 
      <?php if($userPriv->level == 0 || $userPriv->level == 1): ?>
      <li class="active">
        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-hand-holding-usd"></i> LOANS</a>
        <ul class="collapse list-unstyled" id="homeSubmenu">
          <li>
              <a href="<?php echo base_url(); ?>loan-by-member">LOAN BY MEMBER</a>
          </li>
          <li>
              <a href="<?php echo base_url(); ?>loan-request">LOAN REQUEST</a>
          </li>
          <li>
              <a href="<?php echo base_url(); ?>loan-list">LOANS LIST</a>
          </li>
          <li>
              <a href="<?php echo base_url(); ?>loans-application">LOAN APPLICATION</a>
          </li>
          <!-- <li>
              <a href="#">COLLECTION</a>
          </li> -->
          <!-- <li>
              <a href="<?php //echo base_url(); ?>claim-benefit">BENEFIT CLAIMS</a>
          </li>
          <li>
              <a href="<?php //echo base_url(); ?>official-receipt">COLLECTION</a>
          </li>
          <li>
              <a href="<?php //echo base_url(); ?>cash-gift">CASH GIFT</a>
          </li> -->
        </ul>
      </li>
			<?php endif; ?> 
			<?php if($userPriv->level == 0 || $userPriv->level == 2): ?>
			<li>
        <a href="#homeColmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-hand-holding-usd"></i>COLLECTION</a>
        <ul class="collapse list-unstyled" id="homeColmenu">
          <li>
            <!-- <a href="javascript:void(0);" id="add-contribution-by-type">PROCESS CONTRIBUTION</a> -->
            <a href="<?php echo base_url(); ?>process-contribution" id="">PROCESS CONTRIBUTION</a>
            <!-- <a href="javascript:void(0);" id="add-payments-by-type">PROCESS LOAN PAYMENTS</a> -->
            <a href="<?php echo base_url(); ?>process-loan-payments" id="">PROCESS LOAN PAYMENTS</a>
            <a href="<?php echo base_url(); ?>official-receipt">PROCESS OFFICIAL RECEIPT</a>
            <a href="<?php echo base_url(); ?>view-report">COLLECTION REPORTS</a>
            <!-- add-contribution-by-type -->
            <!-- add-payments-by-type -->
            <!-- showBtnPrintByRegion -->
          </li>
        </ul>
      </li>
			<?php endif; ?> 
			<?php if($userPriv->level == 0 || $userPriv->level == 3): ?>
      <li class="active">
						<a href="#benefitCSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-hand-holding-usd"></i> BENEFIT CLAIMS</a>
						<ul class="collapse list-unstyled" id="benefitCSubmenu">
								<li>
                    <a href="<?php echo base_url(); ?>benefit-request">BENEFIT CLAIMS REQUEST</a>
                </li>
                <li>
										<a href="<?php echo base_url(); ?>claim-benefit">PROCESS BENEFIT CLAIMS</a>
								</li>
								<!-- <li>
										<a href="#">COLLECTION</a>
								</li> -->
								<!-- <li>
										<a href="<?php //echo base_url(); ?>claim-benefit">BENEFIT CLAIMS</a>
								</li>
								<li>
										<a href="<?php //echo base_url(); ?>official-receipt">COLLECTION</a>
								</li>
								<li>
										<a href="<?php //echo base_url(); ?>cash-gift">CASH GIFT</a>
								</li> -->
						</ul>
				</li>
			<?php endif; ?> 
			<?php if($userPriv->level == 0 || $userPriv->level == 1): ?>
			<li>
        <a href="<?php echo base_url(); ?>cash-gift"><i class="fas fa-user-cog"></i> CASH GIFT</a>
      </li>
			<?php endif; ?> 
			<?php if($userPriv->level == 0 || $userPriv->level == 4): ?>
      <li>
        <a href="#acctgSubMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-book-open"></i> ACCOUNTING</a>
        <ul class="collapse list-unstyled" id="acctgSubMenu">
            <li>
                <a href="<?php echo base_url(); ?>general-journal">GJ</a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>crj-transaction">CRJ</a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>cdj-transaction">CDJ</a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>pacs-transaction">PACS</a>
            </li>
            <li>
                <a href="javascript:void(0);" onclick="">ANNUAL CLOSING</a>
            </li>
        </ul>
      </li>
      <li>
        <a href="#acctgRepSubMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-paste"></i> ACCTG REPORTS</a>
        <ul class="collapse list-unstyled" id="acctgRepSubMenu">
            <li>
                <a href="<?php echo base_url(); ?>gj-posted">GJ REPORT</a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>crj-posted">CRJ REPORT</a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>cdj-posted">CDJ REPORT</a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>pacs-posted">PACS REPORT</a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>general-ledger">GENERAL LEDGER</a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>trial-balance">TRIAL BALANCE</a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>balance-sheet">BALANCE SHEET</a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>income-statement">INCOME STATEMENT</a>
            </li>
        </ul>
      </li>
			<?php endif; ?> 
      <li>
        <a href="<?php echo base_url(); ?>change-password"><i class="fas fa-tasks"></i> CHANGE PASSOWRD</a>
      </li>
  </ul>

</nav>

        <!-- Page Content  -->
<div id="content">
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
    <div class="container-fluid">
        <button type="button" id="sidebarCollapse" class="btn btn-default mr-3">
            <i class="fas fa-align-left"></i>
            <!-- <span>Toggle Sidebar</span> -->
        </button>
        <button class="btn btn-dark d-inline-block d-lg-none ml-auto " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-align-justify"></i>
        </button>
        <h4 class="mb-0" id="badge-heading"><?php echo $heading; ?></h4>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                  <!-- <a class="nav-link" href="<?php //echo base_url('settings'); ?>"><i class="fas fa-cog"></i> Settings</a> -->
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="<?php echo base_url() . $go_logout; ?>"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="modal fade" id="modal-annual-closing" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="modal-product-inventory" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
    <div class="modal-header">
  <h5 class="modal-title" id="modal-products-title"><?php echo $title; ?></h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
  <form id="frm-add-products" enctype="multipart/form-data">
    <div class="row mb-2">
      <div class="col">
        <label for="date" class="font-12">Date</label>
      </div>
      <div class="col">
        <label for="" class="">Dange Range</label>
        <div id="reportrangedailysales" class="rangepicker" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 81%;font-size:18px;">
          <i class="fa fa-calendar"></i>&nbsp;
          <span></span> 
          <span class="date_range_span none"></span><i class="fa fa-caret-down"></i>
        </div>
      </div>
    </div>
  </form>
</div>
<div class="modal-footer">
  <button type="button" onclick="" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
  
</div>
    </div>
  </div>
</div>