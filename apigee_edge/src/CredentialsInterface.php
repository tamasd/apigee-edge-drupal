<?php

namespace Drupal\apigee_edge;

/**
 * Defines an interface for credentials classes.
 */
interface CredentialsInterface {

  /**
   * Gets the API base URL.
   *
   * @return string
   *   The API base URL.
   */
  public function getBaseUrl(): string;

  /**
   * Gets the API username.
   *
   * @return string
   *   The API username.
   */
  public function getUsername(): string;

  /**
   * Gets the API password.
   *
   * @return string
   *   The API password.
   */
  public function getPassword(): string;

  /**
   * Sets the API baseURL.
   *
   * @param string $baseURL
   *   The API base URL.
   */
  public function setBaseUrl(string $baseURL);

  /**
   * Sets the API username.
   *
   * @param string $username
   *   The API username.
   */
  public function setUsername(string $username);

  /**
   * Sets the API password.
   *
   * @param string $password
   *   The API password.
   */
  public function setPassword(string $password);

}
