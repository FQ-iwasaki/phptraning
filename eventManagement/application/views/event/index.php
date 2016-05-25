
<div class="container">
  <h1 id="show-event">イベント一覧</h1>

  <div id="pages">
    <?php echo $this->pagination->create_links();?>
  </div>
  <table class="table table-bordered" >
    <thead>
      <tr>
        <th>タイトル</th>
        <th>開始日時</th>
        <th>場所</th>
        <th>対象グループ</th>
        <th>詳細</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($events as $event): ?>
        <tr>
          <th><?php echo $event->title; ?></th>
          <td><?php echo $event->start; ?></td>
          <td><?php echo $event->place; ?></td>
          <td><?php echo $event->name; ?></td>
          <td><a href="<?php echo base_url('event/show/'.$event->id); ?>"class="btn btn-default" href="#" role="button">詳細</a></td>
        </tr>
      <?php endforeach; ?>

    </tbody>
  </table>

  <a href="<?php echo base_url('event/add'); ?>"><button class="btn btn-primary">イベント登録</button></a>
</div>
  
