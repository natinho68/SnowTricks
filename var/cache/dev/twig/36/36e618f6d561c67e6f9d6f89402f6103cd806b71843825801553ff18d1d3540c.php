<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_27a3f392007cb87deb163129ba6cca9b35a91e681c4ba2b2fd87bf5359d2e89e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d9d9eaf56adbf47750da1348e32e672495e6c4b3da3f93bb513f3c943d732f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d9d9eaf56adbf47750da1348e32e672495e6c4b3da3f93bb513f3c943d732f0->enter($__internal_0d9d9eaf56adbf47750da1348e32e672495e6c4b3da3f93bb513f3c943d732f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_57323f81870a7491edb495be2f9be9eaece1ecf773ee328ad9beeeff18dce951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57323f81870a7491edb495be2f9be9eaece1ecf773ee328ad9beeeff18dce951->enter($__internal_57323f81870a7491edb495be2f9be9eaece1ecf773ee328ad9beeeff18dce951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_0d9d9eaf56adbf47750da1348e32e672495e6c4b3da3f93bb513f3c943d732f0->leave($__internal_0d9d9eaf56adbf47750da1348e32e672495e6c4b3da3f93bb513f3c943d732f0_prof);

        
        $__internal_57323f81870a7491edb495be2f9be9eaece1ecf773ee328ad9beeeff18dce951->leave($__internal_57323f81870a7491edb495be2f9be9eaece1ecf773ee328ad9beeeff18dce951_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
