@extends('layouts.app')

@section('content')
<!-- view -->
<div class="container">
    <div class="row">
      <!--   <div class="col-md-12 col-md-offset-1"> -->
    <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                     <div>
                        user detail: 
                        <table>
                            
                       <?php foreach ($users as $user) { ?>  

                            <tr>
                                <td><?php echo $user->username; ?></td>
                                <td><?php echo $user->id; ?></td>
                                <td><?php echo $user->email; ?></td>
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
