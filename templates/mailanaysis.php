<div class="row p-5 justify-content-center" >
          <div class="col-md-6 p-3" style="background-color: white;">
            <h5 class="pb-3">Let's Analyse your Email</h5>
            <form method="post" action="./maillogic.php">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Receiver Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Sender Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="sender">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Subject</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Mail Content</label>
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
              <button type="submit" class="btn btn-primary">Analyse your email</button>
            </form>
          </div>
        </div>