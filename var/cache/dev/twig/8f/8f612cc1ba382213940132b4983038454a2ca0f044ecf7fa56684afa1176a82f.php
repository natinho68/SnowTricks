<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_60e0e966e0140078b587b8d51af5fb64f61ad224bc8c67eee154d7af1004ad25 extends Twig_Template
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
        $__internal_d1e5dfe69888c7a70b05bd61148f10ee8d13f45dcf223b779aaa3e1dfded2a91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1e5dfe69888c7a70b05bd61148f10ee8d13f45dcf223b779aaa3e1dfded2a91->enter($__internal_d1e5dfe69888c7a70b05bd61148f10ee8d13f45dcf223b779aaa3e1dfded2a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_a78a427dfc3cbf77a121ee2a4f361649e324a8a38448a291a485ed291c798698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a78a427dfc3cbf77a121ee2a4f361649e324a8a38448a291a485ed291c798698->enter($__internal_a78a427dfc3cbf77a121ee2a4f361649e324a8a38448a291a485ed291c798698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_d1e5dfe69888c7a70b05bd61148f10ee8d13f45dcf223b779aaa3e1dfded2a91->leave($__internal_d1e5dfe69888c7a70b05bd61148f10ee8d13f45dcf223b779aaa3e1dfded2a91_prof);

        
        $__internal_a78a427dfc3cbf77a121ee2a4f361649e324a8a38448a291a485ed291c798698->leave($__internal_a78a427dfc3cbf77a121ee2a4f361649e324a8a38448a291a485ed291c798698_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
