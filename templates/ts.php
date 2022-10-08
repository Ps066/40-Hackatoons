<div class="row justify-content-center">
          <div class="col-md-7 bg-white pt-3 pb-3 mb-3" style="border-radius:12px">
            <h5>Let's Schedule your Email</h5>
            <form>
              <div class="mb-3">
                <label for="receiver_email" class="form-label">Enter the receiver email address</label>
                <input type="email" class="form-control" id="receiver_email" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="subject" class="form-label">Enter the subject</label>
                <input type="text" class="form-control" id="subject">
              </div>
              <div class="mb-3">
                <label for="date" class="form-label">Enter date to be sent</label>
                <input type="date" class="form-control" id="date">
              </div>
              <div class="mb-3">
                <label for="time" class="form-label">Enter time to be sent</label>
                <input type="time" class="form-control" id="time">
              </div>
              <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Enter the email content</label>
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
              <button type="submit" class="btn btn-primary" onclick="schedule()">Schedule Email</button>
            </form>
          </div>
        </div>