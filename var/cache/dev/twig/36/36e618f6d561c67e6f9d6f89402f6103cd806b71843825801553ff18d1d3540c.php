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
        $__internal_abd770656fcb2111606c23159c43bc58f1f71f3cef56c54801257c46395c8b5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abd770656fcb2111606c23159c43bc58f1f71f3cef56c54801257c46395c8b5c->enter($__internal_abd770656fcb2111606c23159c43bc58f1f71f3cef56c54801257c46395c8b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_730878f4bdac2567f4d2bcec6dda5282cc34ffd8404e3b78ffe1c7e60776efa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_730878f4bdac2567f4d2bcec6dda5282cc34ffd8404e3b78ffe1c7e60776efa6->enter($__internal_730878f4bdac2567f4d2bcec6dda5282cc34ffd8404e3b78ffe1c7e60776efa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_abd770656fcb2111606c23159c43bc58f1f71f3cef56c54801257c46395c8b5c->leave($__internal_abd770656fcb2111606c23159c43bc58f1f71f3cef56c54801257c46395c8b5c_prof);

        
        $__internal_730878f4bdac2567f4d2bcec6dda5282cc34ffd8404e3b78ffe1c7e60776efa6->leave($__internal_730878f4bdac2567f4d2bcec6dda5282cc34ffd8404e3b78ffe1c7e60776efa6_prof);

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
