<section class="hero-section py-3 py-md-5">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-12 pt-3 mb-5 mb-lg-0">

<h5>Data On Server 1:</h5>
<div class="table-responsive my-4">
  <table class="table table-bordered" id="server-data-table-1">
    <tbody>

    </tbody>
  </table>
</div>

<h5>Data On Server 2:</h5>
<div class="table-responsive my-4">
  <table class="table table-bordered" id="server-data-table-2">
    <tbody>
      <?php foreach ($datas as $data) {?>
        <tr>
          <th class="theme-bg-light"><a class="theme-link" href="#"><?php echo $data->id;?></a></th>
          <td><?php echo $data->data_key;?></td>
          <td><?php echo $data->data_value;?></td>
        </tr>
      <?php }?>
    </tbody>
  </table>
</div>

<h5>Data On Server 3:</h5>
<div class="table-responsive my-4">
  <table class="table table-bordered" id="server-data-table-3">
    <tbody>
      <?php foreach ($datas as $data) {?>
        <tr>
          <th class="theme-bg-light"><a class="theme-link" href="#"><?php echo $data->id;?></a></th>
          <td><?php echo $data->data_key;?></td>
          <td><?php echo $data->data_value;?></td>
        </tr>
      <?php }?>
    </tbody>
  </table>
</div>

<h5>Data On Server 4:</h5>
<div class="table-responsive my-4">
  <table class="table table-bordered" id="server-data-table-4">
    <tbody>
      <?php foreach ($datas as $data) {?>
        <tr>
          <th class="theme-bg-light"><a class="theme-link" href="#"><?php echo $data->id;?></a></th>
          <td><?php echo $data->data_key;?></td>
          <td><?php echo $data->data_value;?></td>
        </tr>
      <?php }?>
    </tbody>
  </table>
</div>

<h5>Data On Server 5:</h5>
<div class="table-responsive my-4">
  <table class="table table-bordered" id="server-data-table-5">
    <tbody>
      <?php foreach ($datas as $data) {?>
        <tr>
          <th class="theme-bg-light"><a class="theme-link" href="#"><?php echo $data->id;?></a></th>
          <td><?php echo $data->data_key;?></td>
          <td><?php echo $data->data_value;?></td>
        </tr>
      <?php }?>
    </tbody>
  </table>
</div>
</div>
</div>
</div>
</section>
