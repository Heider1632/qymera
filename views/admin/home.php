<?php
  //navigaton to//
  include 'views/overall/nav-admin.php';
?>
<div id="app">
  <!--template home admin-->
  <div class="section">
    <div class="columns is-2">
      <div class="column is-one-quarter">
        <?php include 'views/overall/nav-aside-admin.php'; ?>
      </div>
      <div class="column">
        <main class="column">
          <div class="level">
            <div class="level-left">
              <div class="level-item">
                <div class="title">Dashboard</div>
              </div>
            </div>
            <div class="level-right">
              <div class="level-item">
                <button type="button" class="button is-small">
                  <?php echo DATE ?>
                </button>
              </div>
            </div>
          </div>

          <div class="columns is-multiline">
            <div class="column">
              <div class="box">
                <div class="heading">Top Seller Total</div>
                <div class="title">56,950</div>
                <div class="level">
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Sales $</div>
                      <div class="title is-5">250,000</div>
                    </div>
                  </div>
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Overall $</div>
                      <div class="title is-5">750,000</div>
                    </div>
                  </div>
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Sales %</div>
                      <div class="title is-5">25%</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="column">
              <div class="box">
                <div class="heading">Feedback Activity</div>
                <div class="title">78% &uarr;</div>
                <div class="level">
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Positive</div>
                      <div class="title is-5">1560</div>
                    </div>
                  </div>
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Negative</div>
                      <div class="title is-5">368</div>
                    </div>
                  </div>
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Pos/Neg %</div>
                      <div class="title is-5">77% / 23%</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="column">
              <div class="box">
                <div class="heading">Progreso Notas</div>
                <div class="title">75% / 25%</div>
                <div class="level">
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Orders $</div>
                      <div class="title is-5">425,000</div>
                    </div>
                  </div>
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Returns $</div>
                      <div class="title is-5">106,250</div>
                    </div>
                  </div>
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Success %</div>
                      <div class="title is-5">+ 28,5%</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end template-->
        </main>
      </div>
    </div>
  </div>
<?php
  include 'html/overall/scripts.php';
?>
