  <div class="container">
            
			<div class="heading">
				<legend>Add Course</legend>
				<?php echo $this->session->flashdata('message'); ?>
			</div> <!-- heading -->
			<div id="main-inner-content">
			<form class="form-horizontal" action="<?php echo $action=site_url('pattern/patternadd'); ?>" method="post" style="border:2px solid #C0C0C0; background-color:#f8f8f8;">
			
            <input type="hidden" id="subject" name="subject" value="<?php echo $subjectid; ?>" />
				<fieldset style="margin-top: 40px;">
				
                <table >
                        <th >
                        <td>Chapter Name</td>
                        <td>Pattern1</td>
                        <td>Pattern2</td>
                        <td>Pattern3</td>
                        <td>Available Question</td>
                        </th>
                <?php
                $i=1; 
                foreach($coursename as $p)
                {
                    
                    
                 ?>   
                    
                      <tr >
                       <td><?php echo $p->chapter_name;?></td>
                       <td>
                                <div class="control-group">
					       	      <div class="controls">
						          	   <input type="text" style="width:50%;" class="input-xlarge" id="pattern1<?php echo $i;?>" name="pattern1<?php echo $i; ?>" rel="popover" value="<?php echo $p->pattern1;?>" />
                    
			                         </div>
		                          </div>
                        </td>
                        <td>
                                <div class="control-group">
					       	      <div class="controls">
						          	   <input type="text" style="width:50%;" class="input-xlarge" id="pattern2<?php echo $i; ?>" name="pattern2<?php echo $i; ?>" rel="popover" value="<?php echo $p->pattern2;?>" />
			                         </div>
		                          </div>
                        </td>
                        <td>
                                <div class="control-group">
					       	         <div class="controls">
						          	   <input type="text"  style="width:50%;" class="input-xlarge" id="pattern3<?php echo $i; ?>" name="pattern3<?php echo $i; ?>" rel="popover" value="<?php echo $p->pattern3;?>" />
			                         </div>
		                          </div>
                        </td>
                                 <td>
                                <div class="control-group">
					       	         <div class="controls">
						          	   <input type="text"  readonly="" style="width:50%;" class="input-xlarge" id="question_count" name="" rel="popover" value="<?php echo $p->qcount;?>" />
			                         </div>
		                          </div>
                        </td>
                        
                        </tr>
                   <?php $i++; }
                        $j=$i-1;   
                     ?>
					 <input type="hidden" id="row_count" name="row_count" rel="popover" value="<?php echo $j; ?>" />
                   </table>
                   <div class="control-group">
						<label class="control-label"></label>
							<div class="controls">
								<button type="submit" class="btn btn-success">Save</button>
								<button type="reset" class="btn btn-primary">Reset</button>
								
							</div>
					</div>
					
                   </fieldset>
                   </form>
                   </div>
                   </div>
				   
				   <script type="text/javascript">
						var count=document.getElementById('row_count').value;
						var row_count=document.getElementById('question_count').value;
						for(var i=0;i<count;i++)
						{
							var j=i+1;
							$('#pattern1'+j).keyup(function(){	
							var pattern1= $('#pattern1'+i).val();
								console.log(pattern1);
								console.log(row_count);
								if(pattern1>row_count)
								{
									console.log(pattern1);
									console.log(row_count);
									alert("Enter the value which is less than avaliable questions");
									$('#pattern1'+i).val("").focus();	
								}
							}); 
							$('#pattern2'+j).keyup(function(){
							var pattern12= $('#pattern2'+i).val();
								if(pattern12>row_count)
								{
									alert("Enter the value which is less than avaliable questions");
									$('#pattern2'+i).val("").focus();	
								}
							}); 
							$('#pattern3'+j).keyup(function(){
							var pattern13= $('#pattern3'+i).val();
								if(pattern13>row_count)
								{
									alert("Enter the value which is less than avaliable questions");
									$('#pattern3'+i).val("").focus();	
								}
							}); 
						}
				   </script>
