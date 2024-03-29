<div class="row">
  <div class="col-md-12">
      <div class="panel panel-primary">
          <div class="panel-body">
              <ul class="chat">
                <?php if (count($msg) == 0):  ?>
                <h4>EMPTY INBOX..</h4>
                <?php else: ?>
                <?php foreach ($msg as $row): ?>
                  <li class="left clearfix"><span class="chat-img pull-left">
                      <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
                  </span>
                      <div class="chat-body clearfix">
                          <div class="header">
                              <strong class="primary-font"><?php echo $row->screen_name; ?></strong> <small class="pull-right text-muted">
                                  <span class="glyphicon glyphicon-time"></span><?php echo date('F j, Y', strtotime($row->transaction_date)); ?></small>
                          </div>
                          <p><?php echo $row->msg; ?></p>
                      </div>
                  </li>
                <?php endforeach; ?>
                <?php endif; ?>
                  <!-- <li class="right clearfix"><span class="chat-img pull-right">
                      <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
                  </span>
                      <div class="chat-body clearfix">
                          <div class="header">
                              <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>13 mins ago</small>
                              <strong class="pull-right primary-font">Bhaumik Patel</strong>
                          </div>
                          <p>
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                              dolor, quis ullamcorper ligula sodales.
                          </p>
                      </div>
                  </li> -->
              </ul>
          </div>
          <div class="panel-footer none">
              <div class="input-group">
                  <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                  <span class="input-group-btn">
                      <button class="btn btn-warning btn-sm" id="btn-chat">
                          Send</button>
                  </span>
              </div>
          </div>
      </div>
  </div>
</div>