<div class="content-body">
    <div class="container-fluid">
     
      
      <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Salary Income</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                       
                        <table class="table table-responsive-md">
                              <thead>
                                      <tr>
                                         <th>Sr No</th>
                                           <th >Username</th>
                            <th >Date</th>
                            <th >amount</th>
                            <th >operation</th>
                            <th >payment system</th>
                        </tr>
                               </thead>
                    <tbody>

                        <?php if(is_array($level_income) || is_object($level_income)){ ?>

                        <?php date_default_timezone_set('UTC');
                        $cnt = $level_income->perPage() * ($level_income->currentPage() - 1); ?>
                        @foreach ($level_income as $value)
                            <tr>
  <td><?= $cnt += 1 ?></td>
        <td> {{ $value->user_id_fk }} </td>
                                <td data-label="Date">{{ date('D, d M Y H:i:s', strtotime($value->created_at)) }}</td>
                                <td data-label="Amount">
                                    <span class="fontBold text-success">+{{ $value->comm }}
                                        {{ generalDetail()->cur_text }}</span>
                                </td>
                                <td data-label="operation"> {{ $value->remarks }} </td>
                                <td data-label="payment system">USDT</td>
                            </tr>
                        @endforeach

                        <?php }?>

                    </tbody>
                                          </table>

                            {{$level_income->withQueryString()->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
  </div>
<!-- 
  <script>
    function resetForm() {
        // Redirect to index without any parameters
        window.location.href = "{{ route('user.levels') }}";
    }
</script> -->
  