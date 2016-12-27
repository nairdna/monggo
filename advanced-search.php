                <!-- category list -->
                <div class="col-lg-2 col-md-2 col-sm-3">
                    <div>
                    <form>
                        <h4><b>Advanced Search</b></h4>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>

                        <div class="input-group">
                        <label for="sort">Sort By</label>
                        <select class="form-control" id="sort" name="sort">
                            <option value="view">Most Viewed</option>
                            <option value="recent">Most Recent</option>
                            <option value="popular">Popular</option>
                        </select>
                        </div>

                        <div class="input-group">
                        <label for="sort">Date Range</label>
                        <select class="form-control" id="sort" name="sort">
                            <option value="view">1 week</option>
                            <option value="recent">1 month</option>
                            <option value="popular">3 months</option>
                        </select>
                        </div>

                        <div class="input-group">
                        <label for="location">Location</label>
                        <select class="form-control" id="location" name="location">
                            <option value="jabodetabek">Jabodetabek</option>
                            <option value="bandung">Bandung</option>
                            <option value="denpasar">Denpasar</option>                            
                            <option value="semarang">Semarang</option>
                            <option value="surabaya">Surabaya</option>
                            <option value="yogyakarta">Yogyakarta</option>
                        </select>
                        </div>

                        <div class="input-group">
                        <label for="categories">Categories</label>
                        <select class="form-control" id="location" name="location">
                            <option value="arts">Arts</option>
                            <option value="bazaar">Bazaar</option>
                            <option value="business">Business</option>                        
                            <option value="community">Community-based</option>
                            <option value="competitions">Competitions</option>
                            <option value="expo">Expo & Conference</option>   
                            <option value="fun">For Fun</option>                        
                            <option value="gov">Government</option>                                             
                            <option value="seminar">Seminar & Workshop</option>
                            <option value="special">Special Occasions</option>                        
                            <option value="sports">Sports</option>
                            <option value="volunteer">Volunteer</option>
                        </select>
                        </div>

                        <div class="input-group">
                            <label for="min">Minimum Price</label>
                        </div>
                        <div class="input-group">
                            <div class="input-group-addon">Rp</div>
                            <input type="text" class="form-control" id="min" placeholder="min">
                        </div>
                        <div class="input-group">
                            <label for="max">Maximum Price</label>
                        </div>
                        <div class="input-group">
                            <div class="input-group-addon">Rp</div>
                            <input type="text" class="form-control" id="max" placeholder="max">
                        </div>
                        
                    </form>
                    <a href="create.php" role="button" class="btn btn-success btn-block">
                        Search Event
                    </a>
                    </div>
                </div>