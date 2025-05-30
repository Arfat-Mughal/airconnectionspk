<div class="card shadow-sm border-0">
    <div class="card-header bg-white border-bottom">
        <h5 class="mb-0 text-dark"><i class="bi bi-person-lines-fill me-2 text-danger"></i>Contact Information</h5>
    </div>
    
    <div class="card-body bg-white">
        <form wire:submit.prevent="submitContactForm">
            <div class="row g-3">
                <div class="col-12 col-md-6">
                    <label class="form-label fw-medium text-primary">Your Name <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text bg-white"><i class="bi bi-person text-danger"></i></span>
                        <input type="text" class="form-control" wire:model="name" required>
                    </div>
                </div>
                
                <div class="col-12 col-md-6">
                    <label class="form-label fw-medium text-primary">Phone Number <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <select class="form-select bg-white" style="max-width: 120px;" wire:model="phoneCountry">
                            <option value="+92">+92 (PK)</option>
                            <option value="+1">+1 (US)</option>
                            <option value="+44">+44 (UK)</option>
                        </select>
                        <span class="input-group-text bg-white"><i class="bi bi-telephone text-danger"></i></span>
                        <input type="tel" class="form-control" wire:model="phoneNumber" required>
                    </div>
                </div>
                
                <div class="col-12 col-md-6">
                    <label class="form-label fw-medium text-primary">Email (Optional)</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white"><i class="bi bi-envelope text-danger"></i></span>
                        <input type="email" class="form-control" wire:model="email">
                    </div>
                </div>
                
                <div class="col-12 col-md-6">
                    <label class="form-label fw-medium text-primary">Your City <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text bg-white"><i class="bi bi-geo-alt text-danger"></i></span>
                        <input type="text" class="form-control" wire:model="city" required>
                    </div>
                </div>
                
                <div class="col-12">
                    <label class="form-label fw-medium text-primary">Message or Comments</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white align-items-start"><i class="bi bi-chat-left-text text-danger mt-2"></i></span>
                        <textarea class="form-control" rows="4" wire:model="comments"></textarea>
                    </div>
                </div>
                
                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-danger w-100 py-2 fw-bold">
                        <i class="bi bi-send-fill me-2"></i>Submit Booking Request
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>