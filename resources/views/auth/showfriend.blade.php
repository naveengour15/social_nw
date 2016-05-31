@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <!--   <div class="col-md-12 col-md-offset-1"> -->
      <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in! naveen
                    <div>
                        <table>
                            <tr>
                                <th>User Name</th>
                            </tr>

                       <?php foreach ($users as $user) { ?>  

                            <tr>
                                <td><?php echo $user->username; ?></td>
                            </tr>

                        <?php 
                            }
                        ?>
                        </table>    
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
