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

/**
 * IavResponseVo
 */
@javax.annotation.Generated(value = "io.swagger.codegen.languages.JavaClientCodegen", date = "2020-06-11T07:03:53.789Z")
public class IavResponseVo {
  @SerializedName("aggregation")
  private IavAggregationResponseVo aggregation = null;

  @SerializedName("bank_link")
  private IavBankLinkResponseVo bankLink = null;

  @SerializedName("vendor_name")
  private String vendorName = null;

  public IavResponseVo aggregation(IavAggregationResponseVo aggregation) {
    this.aggregation = aggregation;
    return this;
  }

   /**
   * Get aggregation
   * @return aggregation
  **/
  @ApiModelProperty(value = "")
  public IavAggregationResponseVo getAggregation() {
    return aggregation;
  }

  public void setAggregation(IavAggregationResponseVo aggregation) {
    this.aggregation = aggregation;
  }

  public IavResponseVo bankLink(IavBankLinkResponseVo bankLink) {
    this.bankLink = bankLink;
    return this;
  }

   /**
   * Get bankLink
   * @return bankLink
  **/
  @ApiModelProperty(value = "")
  public IavBankLinkResponseVo getBankLink() {
    return bankLink;
  }

  public void setBankLink(IavBankLinkResponseVo bankLink) {
    this.bankLink = bankLink;
  }

  public IavResponseVo vendorName(String vendorName) {
    this.vendorName = vendorName;
    return this;
  }

   /**
   * Get vendorName
   * @return vendorName
  **/
  @ApiModelProperty(value = "")
  public String getVendorName() {
    return vendorName;
  }

  public void setVendorName(String vendorName) {
    this.vendorName = vendorName;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    IavResponseVo iavResponseVo = (IavResponseVo) o;
    return Objects.equals(this.aggregation, iavResponseVo.aggregation) &&
        Objects.equals(this.bankLink, iavResponseVo.bankLink) &&
        Objects.equals(this.vendorName, iavResponseVo.vendorName);
  }

  @Override
  public int hashCode() {
    return Objects.hash(aggregation, bankLink, vendorName);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class IavResponseVo {\n");
    
    sb.append("    aggregation: ").append(toIndentedString(aggregation)).append("\n");
    sb.append("    bankLink: ").append(toIndentedString(bankLink)).append("\n");
    sb.append("    vendorName: ").append(toIndentedString(vendorName)).append("\n");
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

