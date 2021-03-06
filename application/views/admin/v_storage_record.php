<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>欢迎使用CCMS彩网后台内容管理系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php include '_header.php'; ?>
  </head>

  <body>

    <?php include '_top.php'; ?>

    <div class="container-fluid">

      <table class="table table-bordered table-striped table-hover">
        <thead>
          <tr>
            <th>操作时间</th>
            <th>动作</th>
            <th>数量变动</th>
            <th>价格/折扣变动</th>
            <th>操作员</th>
            <th style="width:80px;"></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($record as $v) { ?>
          <tr>
            <td><?php echo date('Y年m月d日 H:i:s', $v['sr_time']); ?></td>
            <td><?php echo $v['sr_detail']; ?></td>
            <td><?php echo $v['sr_quantity']; ?></td>
            <td><?php echo $v['sr_price']; ?></td>
            <td><?php echo $v['am_account']; ?></td>
            <td>
              <a href="<?php echo site_url('storage/storageList'), '/0/', $v['pd_id']; ?>" class="btn btn-mini">商品库存列表</a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <div class="pagination"><?php echo $pages; ?></div>

      <?php include '_footer.php'; ?>

    </div>

  </body>
</html>