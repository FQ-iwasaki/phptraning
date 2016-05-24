<div class="container">
  <h1 id="show-group">グループ一覧</h1>

  <div id="pages">
    <?php echo $this->pagination->create_links();?>
  </div>
  <table class="table table-bordered" >
    <thead>
      <tr>
        <th>グループ名</th>
        <th>削除</th>
      <tr>
    <thead>
    <tbody>
      <?php foreach($groups as $group): ?>
        <tr>
          <td><?php echo $group->name; ?></td>
          <td>
            <a class="btn btn-default" href="#" role="button" data-toggle="modal" data-target="#myModal">
                削除
            </a>
            <!-- モーダルウィンドウの中身 -->
            <div class="modal fade" id="myModal">
              <div class="modal-dialog">
                <div class="modal-content">

                  <div class="modal-body">本当に削除してよろしいですか?</div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <a href="<?php echo base_url('group/delete/'. $group->id); ?>"><button type="button" class="btn btn-success">OK</button></a>
                   </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
      <?php endforeach; ?>

    </tbody>
  </table>

  <a href="<?php echo base_url('group/add'); ?>"><button class="btn btn-primary">グループ登録</button></a>
  </div>
</div>
<script>

</script>
