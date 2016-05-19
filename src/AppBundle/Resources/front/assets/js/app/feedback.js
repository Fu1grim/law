"use strict";

import "jquery";
import "jquery-validation";
import "jquery-mask-plugin";
import Loader from "../components/loader";

new Loader();
$("#feedback-form").validate();
