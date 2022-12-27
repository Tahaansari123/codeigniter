<?php $msg = $this->session->flashdata('msg');
 if ($msg != '') {
  echo '<div class="alert alert-success">' . $msg . '</div>';
}

?>
<div class="container-fluid">
  <div class="row text-center">
    <table class="table table-bordered table-hover table-striped">
      <thead>
        <tr>
          <th scope="col">Srno</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Cnic</th>
          <th scope="col">Phone</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($data as $item): ?> 
        <tr>
          <td><?php echo $item->id; ?></td>
          <td><?php echo $item->name; ?></td>
          <td><?php echo $item->email; ?></td>
          <td><?php echo $item->cnic; ?></td>
          <td><?php echo $item->phone; ?></td>
          <td>
            <a href="<?php echo base_url('user/edit/'.$item->id); ?>"><i class="fa-sharp fa-solid fa-pen-to-square"></i></a>
            <a href="<?php echo base_url('user/delete/'.$item->id); ?>"><i class="fa-solid fa-trash"></i></a>
          </td>
        </tr>
      <?php endforeach ?>

      </tbody>
    </table>
  </div>
</div>