
          <!DOCTYPE html>
          <html lang="en" class="pf-m-redhat-font">
            <head>
              <meta charset="utf-8" />
              <meta name="viewport" content="width=device-width, initial-scale=1" />
              <link rel="stylesheet" href="fonts.css" />
              <!-- Include latest PatternFly CSS via CDN -->
              <link 
                rel="stylesheet" 
                href="https://unpkg.com/@patternfly/patternfly/patternfly.css" 
                crossorigin="anonymous"
              >
              <link rel="stylesheet" href="style.css" />
              <title>PatternFly Grid CodeSandbox Example</title>
            </head>
            <body>
              <form class="pf-c-form" novalidate>
  <div class="pf-l-grid pf-m-all-6-col-on-md pf-m-gutter">
    <div class="pf-c-form__group">
      <div class="pf-c-form__group-label"><label class="pf-c-form__label" for="form-demo-grid-name">
          <span class="pf-c-form__label-text">Integration Name</span>&nbsp;<span class="pf-c-form__label-required" aria-hidden="true">&#42;</span></label>
      </div>
      <div class="pf-c-form__group-control">
        <input
          class="pf-c-form-control"
          required
          type="text"
          id="integration-name"
          name="integration-name"
          aria-describedby="form-demo-grid-name-helper"
        />


      </div>
    </div>
    <div class="pf-c-form__group">
      <div class="pf-c-form__group-label"><label class="pf-c-form__label" for="endpoint-url">
          <span class="pf-c-form__label-text">URL Endpoint</span>&nbsp;<span class="pf-c-form__label-required" aria-hidden="true">&#42;</span></label>
      </div>
      <div class="pf-c-form__group-control">
        <input
          class="pf-c-form-control"
          required
          type="text"
          id="endpoint-url"
          name="endpoint-url"
        />
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
      <div class="pf-c-form__group-label"><label class="pf-c-form__label" for="form-demo-grid-email">
          <span class="pf-c-form__label-text">Email</span></label>
      </div>
      <div class="pf-c-form__group-control">
        <input
          class="pf-c-form-control"
          type="email"
          id="form-demo-grid-email"
          name="form-demo-grid-email"
        />
      </div>
    </div>
    <div class="pf-c-form__group">
      <div class="pf-c-form__group-label"><label class="pf-c-form__label" for="form-demo-grid-address">
          <span class="pf-c-form__label-text">Street address</span></label>
      </div>
      <div class="pf-c-form__group-control">
        <input
          class="pf-c-form-control"
          type="text"
          id="form-demo-grid-address"
          name="form-demo-grid-address"
        />
      </div>
    </div>
    <div class="pf-l-grid pf-m-all-6-col pf-m-gutter">
      <div class="pf-c-form__group">
        <div class="pf-c-form__group-label"><label class="pf-c-form__label" for="form-demo-grid-city">
            <span class="pf-c-form__label-text">City</span></label>
        </div>
        <div class="pf-c-form__group-control">
          <input
            class="pf-c-form-control"
            id="form-demo-grid-city"
            name="form-demo-grid-city"
          />
        </div>
      </div>
      <div class="pf-c-form__group">
        <div class="pf-c-form__group-label"><label class="pf-c-form__label" for="form-demo-grid-state">
            <span class="pf-c-form__label-text">State</span></label>
        </div>
        <div class="pf-c-form__group-control">
          <select
            class="pf-c-form-control"
            id="form-demo-grid-state"
            name="form-demo-grid-state"
          >
            <option value selected>Select one</option>
            <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
          </select>
        </div>
      </div>
    </div>
    <div class="pf-c-form__group pf-m-action">
      <div class="pf-c-form__group-control">
        <div class="pf-c-form__actions">
          <button class="pf-c-button pf-m-primary" type="submit">Submit</button>
          <button class="pf-c-button pf-m-link" type="button">Cancel</button>
        </div>
      </div>
    </div>
  </div>
</form>
            </body>
          </html>
        