<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">待还列表</div>

  <!-- Table -->
  <table class="table table-striped">
     <tr>
      <th>借款日期</th>
      <th>借款金额</th>
      <th>借款天数</th>
      <th>待还本息</th>
     </tr>
     @foreach ( $loanrecords as $loanrecord )
     <tr>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
     </tr>
     @endforeach
  </table>
</div>