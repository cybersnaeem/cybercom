<?php
    class BlogPost extends Connection{
       
        public function displayblogPost()
		{
		    $query = "select * from blog_post";
		    $result = $this->con->query($query);
		    if ($result->num_rows > 0) {
                $data = array();
                    while ($row = $result->fetch_assoc()) {
                        $data[] = $row;
                    }
                    return $data;
                    
                }else{
                    echo "No found records";
                }
		}
        public function getCatagoryName($cid){
            $query = "select title from category where category_id = $cid";
            $result = $this->con->query($query);
            if ($result->num_rows) {
                $row = $result->fetch_assoc();
                return $row['title'];
            }
        }
        public function fillCatagory(){
            $query = "select * from category";
            $result = $this->con->query($query);
            return $result;
        }
        public function addBlogPost($addproduct,$img){
            session_start();
            print_r($addproduct);
            $title = $addproduct['title'];
            $content = $addproduct['content'];
            $url = $addproduct['url'];
            $pub_date = $addproduct['pub_date'];
            $tmp_name = $_FILES['image']['tmp_name'];
            $cid = $addproduct['cid'];

            if(!empty($title) && !empty($content) && !empty($url) && !empty($pub_date) && !empty($img)){
                if(move_uploaded_file($tmp_name,'./../pages/uploads/'.$img)){
                    echo 'Image Upload Successfully';
                }
                else{
                    echo 'error while uploading Image';
                }
                $id = $_SESSION['userId'];
                echo $query = "insert into blog_post(id,category_id,title,url,content,image)value($id,$cid,'$title','$url','$content','$img')";
                 $sql = $this->con->query($query);
                if ($sql > 0) {
                    header("Location:./../pages/view_blog_posts.php?insert_msg=Blog post success!");
                }else{
                    echo "Registration failed try again!";
                }
            }
            print_r($addproduct);
        }
        public function editData($id)
		{
		    $query = "select * FROM blog_post WHERE bid = '$id'";
		    $result = $this->con->query($query);
		    if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                return $row;
		    }else{
			    echo "Record not found";
		    }
		}

        public function updateData($contact,$img)
		{
            session_start();
            print_r($contact);
            $cid= $contact['cid']; 
            $title = $contact['title'];
            $content = $contact['content'];
            $url = $contact['url'];
            $pub_date = $contact['pub_date'];
            $bid = $contact['bid'];
            $id = $_SESSION['userId'];
            $updated_at = (new DateTime())->format('Y-m-d H:i:s');
            $image = $img;

            if(!empty($cid) && !empty($title) && !empty($content) && !empty($url) && !empty($pub_date) && !empty($bid)){
                if (!empty($id) && !empty($contact)) {
                    echo $query = "update blog_post set id=$id,category_id=$cid,title='$title',url='$url',content ='$content',image ='$image',updated_at='$updated_at'  where bid = '$bid'";
                    $sql = $this->con->query($query);
                    if ($sql==true) {
                        header("Location:./../pages/view_blog_posts.php?update_msg=Contact Updated Successfully..");
                    }else{
                        echo "Contact update failed!!";
                    }
                }
            }
            else{
                echo 'please Fillup All Fields';
            }
		}

    }
?>


