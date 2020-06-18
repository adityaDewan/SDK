/*
 * Hydrogen Integration API
 * The Hydrogen Integration API
 *
 * OpenAPI spec version: 1.2.1
 * Contact: info@hydrogenplatform.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */


package com.hydrogen.integration.model;

import java.util.Objects;

import com.google.gson.annotations.SerializedName;
import io.swagger.annotations.ApiModelProperty;

import java.util.UUID;

/**
 * NucleusTransferFieldsCO
 */
@javax.annotation.Generated(value = "io.swagger.codegen.languages.JavaClientCodegen", date = "2020-06-11T07:03:53.789Z")
public class NucleusTransferFieldsCO {
  @SerializedName("nucleus_account_type_id")
  private UUID nucleusAccountTypeId = null;

  @SerializedName("nucleus_transfer_all_cash")
  private Boolean nucleusTransferAllCash = null;

  public NucleusTransferFieldsCO nucleusAccountTypeId(UUID nucleusAccountTypeId) {
    this.nucleusAccountTypeId = nucleusAccountTypeId;
    return this;
  }

   /**
   * Get nucleusAccountTypeId
   * @return nucleusAccountTypeId
  **/
  @ApiModelProperty(value = "")
  public UUID getNucleusAccountTypeId() {
    return nucleusAccountTypeId;
  }

  public void setNucleusAccountTypeId(UUID nucleusAccountTypeId) {
    this.nucleusAccountTypeId = nucleusAccountTypeId;
  }

  public NucleusTransferFieldsCO nucleusTransferAllCash(Boolean nucleusTransferAllCash) {
    this.nucleusTransferAllCash = nucleusTransferAllCash;
    return this;
  }

   /**
   * Get nucleusTransferAllCash
   * @return nucleusTransferAllCash
  **/
  @ApiModelProperty(value = "")
  public Boolean isNucleusTransferAllCash() {
    return nucleusTransferAllCash;
  }

  public void setNucleusTransferAllCash(Boolean nucleusTransferAllCash) {
    this.nucleusTransferAllCash = nucleusTransferAllCash;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    NucleusTransferFieldsCO nucleusTransferFieldsCO = (NucleusTransferFieldsCO) o;
    return Objects.equals(this.nucleusAccountTypeId, nucleusTransferFieldsCO.nucleusAccountTypeId) &&
        Objects.equals(this.nucleusTransferAllCash, nucleusTransferFieldsCO.nucleusTransferAllCash);
  }

  @Override
  public int hashCode() {
    return Objects.hash(nucleusAccountTypeId, nucleusTransferAllCash);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class NucleusTransferFieldsCO {\n");
    
    sb.append("    nucleusAccountTypeId: ").append(toIndentedString(nucleusAccountTypeId)).append("\n");
    sb.append("    nucleusTransferAllCash: ").append(toIndentedString(nucleusTransferAllCash)).append("\n");
    sb.append("}");
    return sb.toString();
  }

  /**
   * Convert the given object to string with each line indented by 4 spaces
   * (except the first line).
   */
  private String toIndentedString(java.lang.Object o) {
    if (o == null) {
      return "null";
    }
    return o.toString().replace("\n", "\n    ");
  }

}

