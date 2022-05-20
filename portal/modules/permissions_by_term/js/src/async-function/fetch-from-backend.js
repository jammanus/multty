const axios = require('axios');

/**
 * @returns array
 */
const fetchFromBackend = async () => {
  let contentType = null;
  if (window.location.href.indexOf('/node/add') !== -1) {
    contentType = window.location.href.split("/").pop();
  }

  let url = '/admin/permissions-by-term/access-info-by-url?url=' + window.location.pathname;
  if (contentType !== null) {
    url = '/admin/permissions-by-term/access-info-by-content-type/' + contentType;
  }

  return await axios.get(url, { credentials:'include' })
      .then(function(response) {
        return response.data;
      }).then(function(data) {
        return data;
      });
};

export default fetchFromBackend;
