<!-- --------------------------------------------------------------------------------------------- -->
<div class="container py-4 bg-light">
    <!-- row Panel -->
    <div class="row pb-4">
      <h4>
          Quản lý banner
      </h4>
    </div>
    <!-- row filter, button thêm sách -->
    <div class="row py-3 px-1 mb-2">
      <!-- Form tìm kiếm -->
      <div class="col-md-11 d-flex">
        <form class="d-flex w-100">
            <select class="form-select me-2" aria-label="Default select example" style="max-width: 200px;">
                <option selected>Tất cả trạng thái</option>
                <option value="1">One</option>
            </select>
        </form>
      </div>
      <!-- Button thêm sách -->
      <div class="col-md-1 d-flex justify-content-end">
        <button class="btn btn-success btn-sm open_add_form" style="width:110px" data-bs-toggle="modal" data-bs-target="#staticBackdropEditBanner" role="button" type="button">Thêm mới</button>
        <!-- Thêm sách mới Modal -->
        
      </div>
    </div>
    <!-- row table -->
    <div class="row">
      <div class="col-md-12">
        <div class=" pb-2 px-2 border rounded-3 shadow bg-white table-responsive">
          <table class="table table-hover">
              <thead class="text-center">
                <tr>
                  <th scope="col">Mã banner</th>
                  <th scope="col">Hình ảnh</th>
                  <th scope="col">Mô tả</th>
                  <th scope="col">Tùy chỉnh</th>
  
                </tr>
              </thead>
              <tbody  class="table-group-divider">
                  <tr>
                    <!-- Mã  -->
                      <td class="align-middle text-center" scope="row">
                          SP001
                      </td>
                    <!-- Hình ảnh -->
                      <td class="book-image text-center" scope="row">
                          <img src="../assets/admin/img/slider2.webp" style="width:350px" alt="">
                      </td>
                    <!-- Mô tả -->
                      <td class="book-name  align-middle text-center" style="max-width: 150px; word-wrap: break-word;">
                          Quảng cáo gì gì đó lor 
                      </td>
                    <!-- Tùy chỉnh -->
                      <td class="align-middle text-center">
                          <!-- Button xem thông tin chi tiết -->
                          <button fdprocessedid="r9x0b9" type="button" class="btn btn-sm open_edit_form" data-bs-toggle="modal" data-bs-target="#staticBackdropEditBanner">
                              <img src="../assets/admin/img/edit.png" style="width:20px" alt="">
                          </button>
                          <!-- Button xóa Banner -->
                          <button fdprocessedid="r9x0b9" type="button" class="btn btn-sm"  >
                              <img src="../assets/admin/img/trash.png" style="width:20px" alt="">
                          </button>
                      </td>
                  </tr>
              </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- Row phân trang -->
    <div class="row mt-4">
      <div class="col-md-12 d-flex justify-content-center">
          <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item me-2">
                  <a class="page-link rounded-circle" href="#" aria-label="Previous">
                    <span aria-hidden="true"><i class="pre fa-solid fa-angle-left"></i></span>
                  </a>
                </li>
                <li class="page-item me-2 "><a class="page-link rounded-circle" href="#">1</a></li>
                <li class="page-item me-2"><a class="page-link rounded-circle" href="#">2</a></li>
                <li class="page-item me-2"><a class="page-link rounded-circle" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link rounded-circle" href="#" aria-label="Next">
                    <span aria-hidden="true"><i class="next fa-solid fa-angle-right"></i></span>
                  </a>
                </li>
              </ul>
          </nav>   
      </div>
    </div>
  <!-- Modal form popup -->
  <div class="modal fade" id="staticBackdropEditBanner" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="bannerModalLabel">Cái này là title modal</h1>
          <button type="button" class="btn-close" id="btn-close-modal" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" id="bannerForm">
          <div class="modal-body">
            <div class="row">
              <!-- col hình ảnh -->
              <div class="col-md-5">
                <div class="row ">
                  <!-- Khung hình ảnh -->
                  <div class="col-md-12 text-center">
                    <div class="border rounded-3 p-4 bg-light" style="height: 300px; display: flex; align-items: center; justify-content: center;">
                      <img id="previewImage1" src="https://via.placeholder.com/150" alt="Preview" style="max-width: 100%; max-height: 100%; display: none;">
                      <span id="placeholderText1" class="text-muted" style="font-size: 1.2rem;">Chưa tải ảnh lên</span>
                    </div>
                  </div>
                </div>
                <div class="row justify-content-center mt-3">
                  <!-- Nút nhập hình ảnh -->
                  <div class="col-md-12 text-center">
                    <label for="uploadImage1" class="btn btn-outline-success rounded-pill">
                      <i class="fa-solid fa-upload"></i> Tải hình ảnh
                    </label>
                    <input type="file" id="uploadImage1" class="d-none edit" accept="image/*">
                  </div>
                </div>
              </div>
              <!-- col thông tin sách -->
              <div class="col-md-7 px-3">
                  <div class="row mb-3">
                    <div class="col-md-12 modal-description">
                      <label for="" class="col-form-label fw-medium">Mô tả</label>
                      <textarea class="form-control" 
                                aria-label="With textarea" 
                                style="max-width: 500px; min-height: 262px; overflow-y: auto; color: #333"
                                placeholder="Nhập vào mô tả Banner..."></textarea>
                    </div>
                  </div>
                            
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success" id="submit_btn">Xác nhận</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  </div>

  <!-- ------------------------------------------------------------------------------------------------- -->
    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- js -->
    <!-- <script src="/assets/js/admin/uploadImg.js"></script> -->
    <script src="../assets/admin/js/Banner.js"></script>
</body>
</html>