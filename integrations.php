<!DOCTYPE html>
  <html lang="en-us">
    <head>
      <meta charSet="utf-8"/>
      <meta http-equiv="x-ua-compatible" content="ie=edge"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
      <title data-react-helmet="true">Telescope Toggle</title>
      <link rel="stylesheet" href="css/patternfly.css" />
      <link rel="stylesheet" href="css/patternfly-addons.css" />
      <link rel="stylesheet" href="css/brands.css" />
      <link rel="stylesheet" href="css/style.css" />
    </head>

    <body>
<form action="tmp.php">
<?php

$pg_host = getenv('PG_HOST');
$pg_db = getenv('PG_DATABASE');
$pg_user = getenv('PG_USER');
$pg_passwd = getenv('PG_PASSWORD');

$db_connection = pg_connect("host=$pg_host port=5432  dbname=$pg_db user=$pg_user password=$pg_passwd");

function putToggles($domain) {
$qq = "select capability.id as id, capability.description as capability, flag.description as flag from capability,flag where domain_id = $domain and capability.flag_id = flag.id;";
$result = pg_query($qq) or die('Error message: ' . pg_last_error());
while ($row = pg_fetch_assoc($result)) {
if ($row['flag'] == "green") {
	$checked = "checked";
} else {
	$checked = "";
}
print '          	<li>' . $row['capability'] . '</li> 
<label class="pf-c-switch" for="' . $row['id'] . '">
  <input class="pf-c-switch__input" type="checkbox" name="capability-' . $row['id'] . '" id="' . $row['id'] . '" aria-labelledby="' . $row['id'] . '-on" ' . $checked . ' />
  <span class="pf-c-switch__toggle">
    <span class="pf-c-switch__toggle-icon">
      <i class="fas fa-check" aria-hidden="true"></i>
    </span>
  </span>
</label>';
}
}


?>    
    
<div class="pf-c-page" id="card-view-example">
  <a class="pf-c-skip-to-content pf-c-button pf-m-primary" href="#main-content-card-view-example" >Skip to content</a>
  <header class="pf-c-page__header">
                <div class="pf-c-page__header-brand">
                  <div class="pf-c-page__header-brand-toggle">
                    <button class="pf-c-button pf-m-plain" type="button" id="page-default-nav-example-nav-toggle" aria-label="Global navigation" aria-expanded="true" data-toggle="collapse" data-target="#mainSideNav" aria-controls="mainSideNav">
                      <i class="fas fa-bars" aria-hidden="true"></i>
                    </button>
                  </div>
                  <a class="pf-c-page__header-brand-link">
                  <img class="pf-c-brand" src="images/telescope-banner4.png" alt="Telescope logo" />
                  </a>
                </div>
               
              </header>
  <div class="pf-c-page__sidebar">
     <div class="pf-c-page__sidebar-body">
      <nav
        class="pf-c-nav"
        id="card-view-example-primary-nav"
        aria-label="Global"
      >
        <ul class="pf-c-nav__list">
          <li class="pf-c-nav__item">
            <a
              href="#toggle" class="pf-c-nav__link pf-m-current" aria-current="page" >Telescope Toggle</a>
          </li>
          <li class="pf-c-nav__item">
            <a href="integrations.php" class="pf-c-nav__link">Integrations</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
          
</div>
<br>
<hr class="pf-c-divider" />
<br>
    <p id="integrations" class="pf-c-title pf-m-2xl">Current Integrations</p>
<table class="pf-c-table pf-m-grid-lg" role="grid" aria-label="This is a sortable table example" id="table-sortable">
  <thead>
    <tr role="row">
      <th class="pf-c-table__sort pf-m-selected " role="columnheader" aria-sort="ascending" scope="col">
        <button class="pf-c-table__button">
          <div class="pf-c-table__button-content">
            <span class="pf-c-table__text">Capability</span>
            <span class="pf-c-table__sort-indicator">
              <i class="fas fa-long-arrow-alt-up"></i>
            </span>
          </div>
        </button>
      </th>
      <th class="pf-c-table__sort pf-m-help " role="columnheader" aria-sort="none" scope="col">
        <div class="pf-c-table__column-help">
          <button class="pf-c-table__button">
            <div class="pf-c-table__button-content">
              <span class="pf-c-table__text">Integration Name</span>
              <span class="pf-c-table__sort-indicator">
                <i class="fas fa-arrows-alt-v"></i>
              </span>
            </div>
          </button>
          <span class="pf-c-table__column-help-action">
          </span>
        </div>
      </th>
<th class="pf-c-table__sort pf-m-help " role="columnheader" aria-sort="none" scope="col">
        <div class="pf-c-table__column-help">
          <button class="pf-c-table__button">
            <div class="pf-c-table__button-content">
              <span class="pf-c-table__text">Success Criteria</span>
              <span class="pf-c-table__sort-indicator">
                <i class="fas fa-arrows-alt-v"></i>
              </span>
            </div>
          </button>
          <span class="pf-c-table__column-help-action">
          </span>
        </div>
      </th>
<th class="pf-c-table__sort pf-m-help " role="columnheader" aria-sort="none" scope="col">
        <div class="pf-c-table__column-help">
          <button class="pf-c-table__button">
            <div class="pf-c-table__button-content">
              <span class="pf-c-table__text">Last Update</span>
              <span class="pf-c-table__sort-indicator">
                <i class="fas fa-arrows-alt-v"></i>
              </span>
            </div>
          </button>
          <span class="pf-c-table__column-help-action">
          </span>
        </div>
      </th>      

 <th class="pf-c-table__sort pf-m-help " role="columnheader" aria-sort="none" scope="col">
        <div class="pf-c-table__column-help">
          <button class="pf-c-table__button">
            <div class="pf-c-table__button-content">
              <span class="pf-c-table__text"></span>
            </div>
          </button>
          <span class="pf-c-table__column-help-action">
          </span>
        </div>
      </th>        
    </tr>
  </thead>
  <tbody role="rowgroup">
<?php
$qq = "SELECT capability.description as capability , integrations.integration_name as integration, integrations.last_update as updated, success_criteria from capability,integrations WHERE integrations.capability_id = capability.id";
$result = pg_query($qq) or die('Error message: ' . pg_last_error());

## Add to table
##       <td role="cell" data-label="updated"><button class="pf-c-button pf-m-primary pf-m-small" type="button">Run Integration</button></td>


while ($row = pg_fetch_assoc($result)) {
print '
    <tr role="row">
      <td role="cell" data-label="Capability">' . $row['capability'] . '</td>
      <td role="cell" data-label="Integration">' . $row['integration'] . '</td>
      <td role="cell" data-label="Success Criteria">' . $row['success_criteria'] . '</td>
      <td role="cell" data-label="updated">' . $row['updated'] . '</td>
    </tr>
';
}
?>
  </tbody>
</table>
<br>
<!--  Start of Add Integrations -->
    <p id="integrations" class="pf-c-title pf-m-2xl">Add Integration</p>

<form novalidate class="pf-c-form pf-m-horizontal" action="addIntegration.php">
  <div class="pf-c-form__group">
    <div class="pf-c-form__group-label">
      <label class="pf-c-form__label" for="horizontal-form-name">
        <span class="pf-c-form__label-text">Integration Name</span>
        <span class="pf-c-form__label-required" aria-hidden="true">&#42;</span>
      </label>
    </div>
    <div class="pf-c-form__group-control">
      <input class="pf-c-form-control" required type="text" id="integration-name" name="integration-name" aria-describedby="horizontal-form-name-helper2" />
    </div>
  </div>
  <div class="pf-c-form__group">
    <div class="pf-c-form__group-label">
      <label class="pf-c-form__label" for="endpoint-url">
        <span class="pf-c-form__label-text">URL endpoint</span>
        <span class="pf-c-form__label-required" aria-hidden="true">&#42;</span>
      </label>
    </div>
    <div class="pf-c-form__group-control">
      <input class="pf-c-form-control" type="text" id="endpoint-url" name="endpoint-url" />
    </div>
  </div>
  <div class="pf-c-form__group">
    <div class="pf-c-form__group-label">
      <label class="pf-c-form__label" for="capability-id">
        <span class="pf-c-form__label-text">Capability</span>
      </label>
    </div>
    <div class="pf-c-form__group-control">
      <select class="pf-c-form-control" id="capability-id" name="capability-id">
      <?php
      $qq = "select domain.description as domain, capability.description as capability, capability.id as capabilityId from domain,capability where domain.id = capability.domain_id;";
$result = pg_query($qq) or die('Error message: ' . pg_last_error());
while ($row = pg_fetch_assoc($result)) {
$str = $row['domain'] . " - " . $row['capability'];
print '
<option value="' . $row['capabilityid'] . '">' . $str . '</option>
';		
}
      ?>
     </select>
    </div>
  </div>
  <div class="pf-c-form__group">
    <div class="pf-c-form__group-label">
      <label class="pf-c-form__label" for="integration_method_id">
        <span class="pf-c-form__label-text">Integration Method</span>
      </label>
    </div>
    <div class="pf-c-form__group-control">
      <select class="pf-c-form-control" id="integration_method_id" name="integration_method_id">
      <?php
      $qq = "select integration_method_name, id from integration_methods;";
$result = pg_query($qq) or die('Error message: ' . pg_last_error());
while ($row = pg_fetch_assoc($result)) {
print '
<option value="' . $row['id'] . '">' . $row['integration_method_name'] . '</option>
';		
}

    
      ?>

     </select>
    </div>
  </div>

  <div class="pf-c-form__group">
    <div class="pf-c-form__group-label">
      <label class="pf-c-form__label" for="username">
        <span class="pf-c-form__label-text">Username</span>
      </label>
    </div>
    <div class="pf-c-form__group-control">
      <input class="pf-c-form-control" type="text" id="username" name="username" />
    </div>
  </div>

 <div class="pf-c-form__group">
    <div class="pf-c-form__group-label">
      <label class="pf-c-form__label" for="password">
        <span class="pf-c-form__label-text">Password</span>
      </label>
    </div>
    <div class="pf-c-form__group-control">
      <input class="pf-c-form-control" type="text" id="password" name="password" />
    </div>
  </div> 
 
<div class="pf-c-form__group">
    <div class="pf-c-form__group-label">
      <label class="pf-c-form__label" for="token">
        <span class="pf-c-form__label-text">Token</span>
      </label>
    </div>
    <div class="pf-c-form__group-control">
<textarea class="pf-c-form-control" name="token" id="token"></textarea>    </div>
  </div>  

 <div class="pf-c-form__group">
    <div class="pf-c-form__group-label">
      <label class="pf-c-form__label" for="success-criteria">
        <span class="pf-c-form__label-text">Success Criteria</span>
      </label>
    </div>
    <p
          class="pf-c-form__helper-text"
          id="form-demo-grid-name-helper"
          aria-live="polite"
        >Success criteria depends on the specific integration. For example it could be a number (such as a %) or boolean (true/false, yes/no)</p>
    <div class="pf-c-form__group-control">
      <input class="pf-c-form-control" type="text" id="success-criteria" name="success-criteria" />
    </div>
  </div> 
  
<!--   <div class="pf-c-form__group">
    <div class="pf-c-form__group-control">
      <div class="pf-c-check">
        <input class="pf-c-check__input" type="checkbox" type="checkbox" id="alt-form-checkbox1" name="alt-form-checkbox1" />
        <label class="pf-c-check__label" for="alt-form-checkbox1">Follow up via email</label>
      </div>
    </div>
  </div> -->
   <div class="pf-c-form__group pf-m-action">
    <div class="pf-c-form__actions">
      <button class="pf-c-button pf-m-primary" type="submit">Add Integration</button>
    </div>
  </div>  
</form>
<!--  End of Add Integrations -->  




<!--  Start of Add Integration Methods -->  
<br>
<hr class="pf-c-divider" />
<br>
    <p id="integrations" class="pf-c-title pf-m-2xl">Add Integration Method</p>
<form novalidate class="pf-c-form pf-m-horizontal" action="addIntegrationMethod.php">
  <div class="pf-c-form__group">
    <div class="pf-c-form__group-label">
      <label class="pf-c-form__label" for="horizontal-form-name">
        <span class="pf-c-form__label-text">Integration Method Name</span>
        <span class="pf-c-form__label-required" aria-hidden="true">&#42;</span>
      </label>
    </div>
    <div class="pf-c-form__group-control">
      <input class="pf-c-form-control" required type="text" id="integration_method" name="integration_method" aria-describedby="horizontal-form-name-helper2" />
    </div>
  </div>
  
     <div class="pf-c-form__group pf-m-action">
    <div class="pf-c-form__actions">
      <button class="pf-c-button pf-m-primary" type="submit">Add Integration Method</button>
    </div>
  </div>  
  </form>
  <!--  End of Add Integrations Methods -->  




    </section>
    <section class="pf-c-page__main-section pf-m-no-padding pf-m-light pf-m-sticky-bottom pf-m-no-fill">
     
    </section>
  </main>
</div>   

    <!-- jQuery -->
    <script type="text/javascript" src="/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>


    <!-- Bootstrap -->
    <script type="text/javascript" src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- SlimScroll -->
    <script type="text/javascript" src="/node_modules/jquery-slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom Javascript -->
    <script type="text/javascript">
    <!--
      jQuery(document).ready(function() {
        jQuery('.pf-c-page__sidebar-body').slimScroll({
          height: '100%',
          width: 'var(--pf-c-page__sidebar--Width)',
        });
      });
    //-->
    </script>
<script type="text/javascript" >
$("form").submit(function () {

    var this_master = $(this);

    this_master.find('input[type="checkbox"]').each( function () {
        var checkbox_this = $(this);


        if( checkbox_this.is(":checked") == true ) {
            checkbox_this.attr('value','1');
        } else {
            checkbox_this.prop('checked',true);
            //DONT' ITS JUST CHECK THE CHECKBOX TO SUBMIT FORM DATA    
            checkbox_this.attr('value','0');
        }
    })
})
</script>
   
  </body>
</html>
