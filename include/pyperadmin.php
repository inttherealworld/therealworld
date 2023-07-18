<?php
  session_start();
  require 'config.php';
?>


<!-- Coding by Terry Dadex | www.dadex.com -->
<?php
  include('./header.php');
?>
    




        <section class="home">
            <main>
            <?php  
                include('./message.php');
            ?>
                <div class="wrapper">
                    <h1> Generalpyper Details list</h1>
                    <div class="table-container">
                        <table>
                            
                            <caption>
                                Smoke with pype Table List 
                            </caption>
    
                            <tr>
                                <th>ID</th>
                                <th>frist_name</th>
                                <th>day</th>
                                <th>month</th>
                                <th>year</th>
                                <th>phone</th>
                                <th>address</th>
                                <th>houses</th>
                                <th>city</th>
                                <th>state</th>
                                <th>zip</th>
                                <th>country</th>
                                <th>email</th>
                                <th>username</th>
                                <th>password</th>
                                <th>cpassword</th>
                                <th>card_number</th>
                                <th>expdate</th>
                                <th>cvc</th>
                                <th>biling_add</th>
                                <th>card_name</th>
                                <th>Actions</th>
                            </tr>  

                            <tbody>

                                <?php
                                  $sql = "SELECT * FROM general_pyper";
                                  $query = mysqli_query($conn,$sql); 

                                  if(mysqli_num_rows($query) > 0)
                                  {
                                    foreach($query as $pyper)
                                    {
                                    
                                      ?> 
                                        <tr>
                                          <td><?= $pyper['id']; ?></td>
                                          <td><?= $pyper['frist_name']; ?></td>
                                          <td><?= $pyper['day']; ?></td>
                                          <td><?= $pyper['month']; ?></td>
                                          <td><?= $pyper['year']; ?></td>
                                          <td><?= $pyper['phone']; ?></td>
                                          <td><?= $pyper['address']; ?></td>
                                          <td><?= $pyper['houses']; ?></td>
                                          <td><?= $pyper['city']; ?></td>
                                          <td><?= $pyper['state']; ?></td>
                                          <td><?= $pyper['zip']; ?></td>
                                          <td><?= $pyper['country']; ?></td>
                                          <td><?= $pyper['email']; ?></td>
                                          <td><?= $pyper['username']; ?></td>
                                          <td><?= $pyper['password']; ?></td>
                                          <td><?= $pyper['cpassword']; ?></td>
                                          <td><?= $pyper['card_number']; ?></td>
                                          <td><?= $pyper['expdate']; ?></td>
                                          <td><?= $pyper['cvc']; ?></td>
                                          <td><?= $pyper['biling_add']; ?></td>
                                          <td><?= $pyper['card_name']; ?></td>

                                          <td class="values">
                                              <a href="resgisation_view.php?id=<?= $dadex['id'];?>" class="btn btn-info btn-sm">View</a>
                                              <a href="resgisation_edit.php?id=<?= $dadex['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                              

                                              <form action="../td/code.php" method="POST" class="d-inline">
                                                  <button type="submit" name="delete_resgisation" value="<?= $dadex['id']; ?>" class="btn btn-danger btn-sm">Delete</button>
                                              </form>
                                          </td>

                                        </tr>
                                      <?php
                                    }
                                  }
                                  else
                                  {
                                    echo "<h5> NO Record Found</h5>";
                                  }
                                ?>
                                
                            </tbody>
    
                        </table>
                    </div>
                </div>
            </main>
        </section>





<?php
  include('./footer.php');
?>