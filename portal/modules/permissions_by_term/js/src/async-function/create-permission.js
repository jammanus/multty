import isEmpty from 'lodash/isEmpty';
import Backend from '../model/backend.prototype';

/**
 * @returns Access
 */
const createPermission = async (fetchFromBackend) => {
  let data = await fetchFromBackend(),
      fieldCssClasses = [];

  if (!isEmpty(data.taxonomyRelationFieldNames)) {
    data.taxonomyRelationFieldNames.forEach((fieldName) => {
      const fieldWrapperClass = '.field--name-' + fieldName.replace(/_/g, '-');

      fieldCssClasses.push(fieldWrapperClass);
    });
  }

  return new Backend(
      data.taxonomyRelationFieldNames,
      data.permissions.userDisplayNames,
      data.permissions.roleLabels,
      fieldCssClasses
  );
}

export default createPermission;
