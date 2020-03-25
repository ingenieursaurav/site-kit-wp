/**
 * Public Data store entrypoint.
 *
 * Site Kit by Google, Copyright 2020 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * External dependencies
 */

/**
 * Internal dependencies
 */
import Data from 'assets/js/googlesitekit/data';

if ( typeof global.googlesitekit === 'undefined' ) {
	global.googlesitekit = {};
}

if ( typeof global.googlesitekit.data === 'undefined' ) {
	global.googlesitekit.data = Data;
}

// This is only exported for Jest and is not used in production.
export default Data;